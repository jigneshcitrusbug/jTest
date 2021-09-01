<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Projects as ProjectsModel;

class Projects extends Component
{

    public $limit;

    public $template;
    public $category;
    public $tech;
    public $technology;
    public $services;
    public $tag;
    public $menu;
    public $project;
    public $project_id = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($limit, $template = null, $category = null,$technologyObj = null, $tech = null, $servicesObj = null, $services = null, $menu = null, $project = null, $tag = null)
    {
        $this->limit = $limit;
        $this->template = $template;
        $this->category = $category;
        $this->tech = $tech;
        $this->technologyObj = $technologyObj;
        $this->services = $services;
        $this->servicesObj = $servicesObj;
        $this->menu = $menu;
        $this->project = $project;
        $this->tag = $tag;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
	//	dd($this->technology);

        $cache_key = $this->tech . "_" . $this->services . "_" . $this->menu . "_" . $this->limit;
		
        if ($this->project && $this->template == "relatedprojects") {

            $this->tech = $this->project->technologies->first()->id;
            $this->project_id = $this->project->id;
        }

        $projects = \Cache::remember('site_projects_' . $cache_key, 60 * 24, function () {

            return ProjectsModel::with(['technologies', 'services'])
                ->whereHas('technologies', function ($query) {
                    if ($this->tech) {
                        $query->where('tech_id', $this->tech);
                    }
                })
                ->whereHas('services', function ($query) {
                    if ($this->services) {
                        $query->where('service_id', $this->services);
                    }
                })
                ->where(function ($query) {
                    if ($this->menu) {
                        $query->where('menu', '1');
                    }
                })
                ->where(function ($query) {
                    if ($this->project_id) {
                        $query->where('id', '<>', $this->project_id);
                    }
                })
                ->where('status', '1')
                // ->inRandomOrder()
                // ->limit($this->limit);
                ->orderby('ordering')->limit($this->limit)->get();
        });





        // $projects = ProjectsModel::with(['projects_single_main','technologies','services'])
        // ->whereHas('technologies',function($query){
        //     if($this->tech){
        //         $query->where('tech_id', $this->tech);
        //     }
        // })
        // ->whereHas('services',function($query){
        //     if($this->services){
        //         $query->where('service_id', $this->services);
        //     }
        // })
        // ->where(function($query){
        //     if($this->menu){
        //         $query->where('menu', '1');
        //     }
        // })
        // ->where('status','1')
        // ->orderby('ordering')->limit($this->limit)->get();


        $template = $this->template ?  'components.' . $this->template : 'components.projects';
		
		$arr = [
            'projects' => $projects,
        ];
		
		if($this->technologyObj){
			$arr['technologyObj'] = $this->technologyObj;
		}
		if($this->servicesObj){
			$arr['servicesObj'] = $this->servicesObj;
		}

        return view($template,$arr);
    }
}
