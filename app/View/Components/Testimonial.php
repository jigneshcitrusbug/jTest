<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Testimonials;

class Testimonial extends Component
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

        $testimonials = \Cache::remember('site_testimonials_2', 60*24, function () {
            return Testimonials::orderby('ordering')->get();
            // return Testimonials::with('testimonials_single_main')->orderby('ordering')->get();
        }); 

        // $testimonials = Testimonials::with('testimonials_single_main')->orderby('ordering')->get();

		$template = $this->template ?  'components.'.$this->template : 'components.testimonial';

        return view($template,[
            'testimonials'=>$testimonials
        ]);
    }
}
