<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Site\Controller;
use Illuminate\Support\Str;
use App\Articles;
use App\Categories;

use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {




        $articles = \Cache::remember('site_articles', 60 * 24, function () {
            return Articles::orderby('id', 'DESC')->limit(100)->get();
        });


        $categories = \Cache::remember('site_articles_categories', 60 * 24, function () {
            return  Categories::get();
        });

        // $works = \Cache::remember('site_projects_landing', 60*24, function () {
        //     return Projects::with(['projects_single_main'])->orderby('ordering')->get();
        // });


        $obj = new  \stdClass();
        $obj->title = 'Blog';
        $obj->url = route('site.blog');
        $breadcrumbs[] = $obj;

        $obj = new  \stdClass();
        $obj->title = 'Home';
        $obj->url = route('site.home');
        $breadcrumbs[] = $obj;


        return view('site.blog', [
            // 'services'=>$services,
            'articles' => $articles,
            'categories' => $categories,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function article($slug, Request $request)
    {


        // $article = Articles::where('slug', $slug)->first();


        $article = \Cache::remember('site_articles_module' . $slug, 60 * 24, function () use ($slug) {
            return Articles::where('slug', $slug)->first();
        });

		/***************Redirect old to new for SEO ***********************/
		if (!$article && strpos($slug, '2020') !== false) {
			$slug = str_replace("2020","2021",$slug);
			$article = Articles::where('slug', $slug)->first();
			if($article){
				return redirect()->route('site.article', [$slug]);
			}
		}

        if (!$article) {
            abort(404);
        }

        $article->views = $article->views + 1;

        // print_r($article);

        $article->save();


        // $obj = new \stdClass();
        // $obj->title =  $article->title;    
        // $obj->url = route('site.article',['slug'=>$article->slug]);
        // $breadcrumbs[] = $obj;




        $obj = new  \stdClass();
        $obj->title = 'Blog';
        $obj->url = route('site.blog');
        $breadcrumbs[] = $obj;

        // $obj = new  \stdClass();
        // $obj->title = 'Home';
        // $obj->url = route('site.home');
        // $breadcrumbs[] = $obj;




        return view('site.single-article', [
            'article' => $article,
            // 'services'=>$services,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
