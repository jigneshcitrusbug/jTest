<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder; 
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Projects;
use App\View\Components\Tech;
use App\View\Components\Service;
use App\View\Components\Partner;
use App\View\Components\Testimonial;
use App\View\Components\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Blade::component('package-projects', Projects::class);
        Blade::component('package-tech', Tech::class);
        Blade::component('package-service', Service::class);
        Blade::component('package-partner', Partner::class);
        Blade::component('package-testimonial', Testimonial::class);
        Blade::component('package-article', Article::class);


        Blade::component('layouts.admin.fields.relation.multiselect', 'multiselect'); 

        // Blade::component('layouts.admin.fields.relation.multiselect', 'multiselect'); 

        //
        Builder::defaultStringLength(191);

        // View::composer(
        //     '*', 'App\Http\View\Composers\ModuleComposer'
        // );
                          
        

    }
}
