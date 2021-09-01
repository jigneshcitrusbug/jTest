<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Technologies;

class Tech extends Component
{
    public $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($template=null)
    {
        $this->template = $template; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {


        $technologies = \Cache::remember('site_tech', 60*24, function () {
            return Technologies::with(['technologies_multiple_tech'])->where('featured','on')->orderby('ordering')->get();
            // return Technologies::with('technologies_single_main','projects.projects_single_main')->where('featured','on')->orderby('ordering')->get();
        });

        // $technologies =  Technologies::with('technologies_single_main','projects.projects_single_main')->where('featured','on')->orderby('ordering')->get();

        $template = $this->template ?  'components.'.$this->template : 'components.tech';

        return view($template,[
            'technologies'=>$technologies
        ]); 
    }
}
