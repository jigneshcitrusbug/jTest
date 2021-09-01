<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Articles;

class Article extends Component
{
    public $article;
    public $title;
    public $tag;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $article = null, $tag = null)
    {
        $this->article = $article;
        $this->title = $title;
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if ($this->tag == null) {
            // $articles = Articles::limit(3)->get();

            $articles = \Cache::remember('site_articles_module', 60 * 24, function () {
                return Articles::orderby('id', 'DESC')->limit(3)->get();
            });
        } else {
            // $articles = $this->article->categories->articles()->orderby('id', 'DESC')->limit(3)->get();
            $extends = explode(' ', $this->tag);
            $articles = \Cache::remember('site_articles_module' . $this->tag, 60 * 24, function () use ($extends) {
                return Articles::where(function ($q) use ($extends) {
                    foreach ($extends as $extend) {
                        $q->orWhere('tags', 'LIKE', '%' . $extend . '%');
                    }
                })->where(function ($q) {
                    if ($this->article) {
                        $q->where('id', '<>', $this->article->id);
                    }
                })->orderby('id', 'DESC')->limit(3)->get();
            });
        }

        return view('components.article', [
            'title' => $this->title,
            'articles' => $articles
        ]);
    }
}
