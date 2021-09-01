<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Services;

class Service extends Component
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


        $services = \Cache::remember('site_services', 60*24, function () {
            return Services::where('menu',1)->where('module',1)->orderby('ordering')->get();
            // return Services::with('manyfile')->orderby('ordering')->get();
        });

        // $services = Services::with('manyfile')->orderby('ordering')->get();


        $template = $this->template ?  'components.'.$this->template : 'components.service';


        return view($template,[
            'services'=>$services
        ]);
    }
}
