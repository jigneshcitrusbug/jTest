<?php

namespace App\View\Components;

use Illuminate\View\Component;



class Partner extends Component
{
    public $hiretitle;
    public $developer;
    public $template;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($hiretitle , $developer, $template=null)
    {
        $this->hiretitle = $hiretitle;
        $this->developer = $developer;
        $this->template = $template;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        $template = $this->template ?  'components.'.$this->template : 'components.partner';


        return view($template,[
            'hiretitle' => $this->hiretitle,
            'developer' => $this->developer
        ]);
    }
}
