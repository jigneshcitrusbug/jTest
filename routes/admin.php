<?php

Route::get('/login',  'LoginController@index' )->name('admin.login');
Route::post('/login', 'LoginController@login')->name('admin.dologin');


Route::group(['middleware' => ['isAdmin'] ], function() {

    Route::post('/logout', 'LoginController@logout')->name('admin.logout');

    Route::get('/',  'DashboardController@show' )->name('admin.home');

    Route::get('/dashboard',  'DashboardController@show' )->name('admin.dashboard');

    Route::get('/menus',  'MenuController@index' )->name('admin.menu');

    Route::get('/setlang/{lang?}',  'SettingController@setlang' )->name('admin.setlang');

    Route::post('/ordering',  'Controller@ordering' )->name('admin.ordering');;

    Route::post('/settings/storeAjax',  'SettingController@storeAjax' );

    Route::post('/settings/datatable', 'SettingController@datatable')->name('admin.settings.datatable');
    Route::get('/settings/search', 'SettingController@search');
    Route::post('/settings/recover', 'SettingController@recover')->name('admin.settings.recover');
    
    Route::resource('/settings', 'SettingController', ['names' => [
        'index' => 'admin.settings',
        'create' => 'admin.settings.create',
        'update' => 'admin.settings.update',
    ]]);
    Route::get('/settings/module/{module?}',  'SettingController@index' )->name('admin.settings.module');
	
	Route::post('/faqs/resetorders', 'FaqsController@resetorders')->name('admin.faq.resetorders');
	Route::post('/faqs/datatable', 'FaqsController@datatable')->name('admin.faqs.datatable');
	Route::resource('/faqs', 'FaqsController',['as' => 'admin']);


    // Route::get('/users/search', 'UserController@search');
    // Route::get('/users/datatable', 'UserController@datatable')->name('admin.users.datatable');
    // Route::resource('/users', 'UserController', ['names' => [
    //     'index' => 'admin.users',
    //     'create' => 'admin.users.create',
    //     'update' => 'admin.users.update',
    // ]]);


    // Route::get('/rolls/search', 'RollController@search');
    // Route::get('/rolls/datatable', 'RollController@datatable')->name('admin.rolls.datatable');
    // Route::resource('/rolls', 'RollController', ['names' => [
    //     'index' => 'admin.rolls',
    //     'create' => 'admin.rolls.create',
    //     'update' => 'admin.rolls.update',
    // ]]);


    // Route::get('/permissions/search', 'PermissionsController@search');
    // Route::get('/permissions/datatable', 'PermissionsController@datatable')->name('admin.permissions.datatable');
    // Route::resource('/permissions', 'PermissionsController', ['names' => [
    //     'index' => 'admin.permissions',
    //     'create' => 'admin.permissions.create',
    //     'update' => 'admin.permissions.update',
    // ]]);


	Route::get('/products/search', 'ProductsController@search');
    Route::get('/products/datatable', 'ProductsController@datatable')->name('admin.products.datatable');
    Route::resource('/products', 'ProductsController', ['names' => [
        'index' => 'admin.products',
        'create' => 'admin.products.create',
        'update' => 'admin.products.update',
    ]]);


	// Route::get('/categories/search', 'CategoriesController@search');
    // Route::get('/categories/datatable', 'CategoriesController@datatable')->name('admin.categories.datatable');
	// Route::resource('/categories', 'CategoriesController', ['names' => [
    //     'index' => 'admin.categories',
    //     'create' => 'admin.categories.create',
    //     'update' => 'admin.categories.update',
    // ]]);

	Route::get('/reference-file/{id}/delete', 'ReferenceController@destroy');

    //Route::resource('/categories', 'CategoriesController', ['as' => 'admin']);
    Route::get('/rollpermissions/{module?}',  'RollpermissionsController@index' )->name('admin.rollpermissions');
    Route::post('/rollpermissions/update',  'RollpermissionsController@updateRollpermissions' )->name('admin.rollpermissions.update');


    // Route::get('/seos/search', 'SeosController@search');
    // Route::get('/seos/datatable', 'SeosController@datatable')->name('admin.seos.datatable');
    // Route::resource('/seos', 'SeosController', ['names' => [
    //     'index' => 'admin.seos',
    //     'create' => 'admin.seos.create',
    //     'update' => 'admin.seos.update',
    // ]]);


    Route::get('/services/search', 'ServicesController@search');
    Route::post('/services/datatable', 'ServicesController@datatable')->name('admin.services.datatable');
    Route::post('/services/recover', 'ServicesController@recover')->name('admin.services.recover');
    Route::resource('/services', 'ServicesController', ['names' => [
        'index' => 'admin.services',
        'create' => 'admin.services.create',
        'update' => 'admin.services.update',
    ]]);


    // Route::get('/servicedetails/search', 'ServicedetailsController@search');
    // Route::get('/servicedetails/datatable', 'ServicedetailsController@datatable')->name('admin.servicedetails.datatable');
    // Route::resource('/servicedetails', 'ServicedetailsController', ['names' => [
    //     'index' => 'admin.servicedetails',
    //     'create' => 'admin.servicedetails.create',
    //     'update' => 'admin.servicedetails.update',
    // ]]);


    Route::get('/projects/search', 'ProjectsController@search');
    Route::post('/projects/datatable', 'ProjectsController@datatable')->name('admin.projects.datatable');
    Route::post('/projects/recover', 'ProjectsController@recover')->name('admin.projects.recover');
    Route::resource('/projects', 'ProjectsController', ['names' => [
        'index' => 'admin.projects',
        'create' => 'admin.projects.create',
        'update' => 'admin.projects.update',
         
    ]]);


    // Route::get('/teams/search', 'TeamsController@search');
    // Route::get('/teams/datatable', 'TeamsController@datatable')->name('admin.teams.datatable');
    // Route::resource('/teams', 'TeamsController', ['names' => [
    //     'index' => 'admin.teams',
    //     'create' => 'admin.teams.create',
    //     'update' => 'admin.teams.update',
    // ]]);


    // Route::get('/career/search', 'CareersController@search');
    // Route::get('/career/datatable', 'CareersController@datatable')->name('admin.careers.datatable');
    // Route::resource('/career', 'CareersController', ['names' => [
    //     'index' => 'admin.careers',
    //     'create' => 'admin.careers.create',
    //     'update' => 'admin.careers.update',
    // ]]);


    // Route::get('/partners/search', 'PartnersController@search');
    // Route::get('/partners/datatable', 'PartnersController@datatable')->name('admin.partners.datatable');
    // Route::resource('/partners', 'PartnersController', ['names' => [
    //     'index' => 'admin.partners',
    //     'create' => 'admin.partners.create',
    //     'update' => 'admin.partners.update',
    // ]]);


    // Route::get('/baners/search', 'BanersController@search');
    // Route::get('/baners/datatable', 'BanersController@datatable')->name('admin.baners.datatable');
    // Route::resource('/baners', 'BanersController', ['names' => [
    //     'index' => 'admin.baners',
    //     'create' => 'admin.baners.create',
    //     'update' => 'admin.baners.update',
    // ]]);


    Route::get('/generator', 'GeneratorController@index')->name('admin.generator');
    Route::post('/generator/getfields', 'GeneratorController@getfields')->name('admin.generator.getfields');
    Route::post('/generator/build', 'GeneratorController@build')->name('admin.generator.build.post');
    Route::get('/generator/build', 'GeneratorController@build')->name('admin.generator.build');


    //do not delete this comments
    //**GENERATOR_ROUTES**//

        // Route::get('/products/search', 'ProductsController@search');
        // Route::post('/products/datatable', 'ProductsController@datatable')->name('admin.products.datatable');
        // Route::post('/products/recover', 'ProductsController@recover')->name('admin.products.recover');
        // Route::resource('/products', 'ProductsController', ['names' => [
        //     'index' => 'admin.products',
        //     'create' => 'admin.products.create',
        //     'update' => 'admin.products.update',
        // ]]);


        

        Route::get('/technologies/search', 'TechnologiesController@search');
        Route::post('/technologies/datatable', 'TechnologiesController@datatable')->name('admin.technologies.datatable');
        Route::post('/technologies/recover', 'TechnologiesController@recover')->name('admin.technologies.recover');
        Route::resource('/technologies', 'TechnologiesController', ['names' => [
            'index' => 'admin.technologies',
            'create' => 'admin.technologies.create',
            'update' => 'admin.technologies.update',
        ]]);



        Route::get('/students/search', 'StudentsController@search');
        Route::post('/students/datatable', 'StudentsController@datatable')->name('admin.students.datatable');
        Route::post('/students/recover', 'StudentsController@recover')->name('admin.students.recover');
        Route::resource('/students', 'StudentsController', ['names' => [
            'index' => 'admin.students',
            'create' => 'admin.students.create',
            'update' => 'admin.students.update',
        ]]);

        
        // Route::get('/teams/search', 'TeamsController@search');
        // Route::post('/teams/datatable', 'TeamsController@datatable')->name('admin.teams.datatable');
        // Route::post('/teams/recover', 'TeamsController@recover')->name('admin.teams.recover');
        // Route::resource('/teams', 'TeamsController', ['names' => [
        //     'index' => 'admin.teams',
        //     'create' => 'admin.teams.create',
        //     'update' => 'admin.teams.update',
        // ]]);


Route::get('/teams/search', 'TeamsController@search');
Route::post('/teams/datatable', 'TeamsController@datatable')->name('admin.teams.datatable');
Route::post('/teams/recover', 'TeamsController@recover')->name('admin.teams.recover');
Route::resource('/teams', 'TeamsController', ['names' => [
    'index' => 'admin.teams',
    'create' => 'admin.teams.create',
    'update' => 'admin.teams.update',
]]);


Route::get('/partners/search', 'PartnersController@search');
Route::post('/partners/datatable', 'PartnersController@datatable')->name('admin.partners.datatable');
Route::post('/partners/recover', 'PartnersController@recover')->name('admin.partners.recover');
Route::resource('/partners', 'PartnersController', ['names' => [
    'index' => 'admin.partners',
    'create' => 'admin.partners.create',
    'update' => 'admin.partners.update',
]]);


Route::get('/careers/search', 'CareersController@search');
Route::post('/careers/datatable', 'CareersController@datatable')->name('admin.careers.datatable');
Route::post('/careers/recover', 'CareersController@recover')->name('admin.careers.recover');
Route::resource('/careers', 'CareersController', ['names' => [
    'index' => 'admin.careers',
    'create' => 'admin.careers.create',
    'update' => 'admin.careers.update',
]]);


Route::get('/baners/search', 'BanersController@search');
Route::post('/baners/datatable', 'BanersController@datatable')->name('admin.baners.datatable');
Route::post('/baners/recover', 'BanersController@recover')->name('admin.baners.recover');
Route::resource('/baners', 'BanersController', ['names' => [
    'index' => 'admin.baners',
    'create' => 'admin.baners.create',
    'update' => 'admin.baners.update',
]]);


Route::get('/seos/search', 'SeosController@search');
Route::post('/seos/datatable', 'SeosController@datatable')->name('admin.seos.datatable');
Route::post('/seos/recover', 'SeosController@recover')->name('admin.seos.recover');
Route::resource('/seos', 'SeosController', ['names' => [
    'index' => 'admin.seos',
    'create' => 'admin.seos.create',
    'update' => 'admin.seos.update',
]]);


Route::get('/rolls/search', 'RollsController@search');
Route::post('/rolls/datatable', 'RollsController@datatable')->name('admin.rolls.datatable');
Route::post('/rolls/recover', 'RollsController@recover')->name('admin.rolls.recover');
Route::resource('/rolls', 'RollsController', ['names' => [
    'index' => 'admin.rolls',
    'create' => 'admin.rolls.create',
    'update' => 'admin.rolls.update',
]]);


Route::get('/permissions/search', 'PermissionsController@search');
Route::post('/permissions/datatable', 'PermissionsController@datatable')->name('admin.permissions.datatable');
Route::post('/permissions/recover', 'PermissionsController@recover')->name('admin.permissions.recover');
Route::resource('/permissions', 'PermissionsController', ['names' => [
    'index' => 'admin.permissions',
    'create' => 'admin.permissions.create',
    'update' => 'admin.permissions.update',
]]);


Route::get('/users/search', 'UsersController@search');
Route::post('/users/datatable', 'UsersController@datatable')->name('admin.users.datatable');
Route::post('/users/recover', 'UsersController@recover')->name('admin.users.recover');
Route::resource('/users', 'UsersController', ['names' => [
    'index' => 'admin.users',
    'create' => 'admin.users.create',
    'update' => 'admin.users.update',
]]);


Route::get('/testimonials/search', 'TestimonialsController@search');
Route::post('/testimonials/datatable', 'TestimonialsController@datatable')->name('admin.testimonials.datatable');
Route::post('/testimonials/recover', 'TestimonialsController@recover')->name('admin.testimonials.recover');
Route::resource('/testimonials', 'TestimonialsController', ['names' => [
    'index' => 'admin.testimonials',
    'create' => 'admin.testimonials.create',
    'update' => 'admin.testimonials.update',
]]);


Route::get('/inquiries/search', 'InquiriesController@search');
Route::post('/inquiries/datatable', 'InquiriesController@datatable')->name('admin.inquiries.datatable');
Route::post('/inquiries/recover', 'InquiriesController@recover')->name('admin.inquiries.recover');
Route::resource('/inquiries', 'InquiriesController', ['names' => [
    'index' => 'admin.inquiries',
    'create' => 'admin.inquiries.create',
    'update' => 'admin.inquiries.update',
]]);


Route::get('/categories/search', 'CategoriesController@search');
Route::post('/categories/datatable', 'CategoriesController@datatable')->name('admin.categories.datatable');
Route::post('/categories/recover', 'CategoriesController@recover')->name('admin.categories.recover');
Route::resource('/categories', 'CategoriesController', ['names' => [
    'index' => 'admin.categories',
    'create' => 'admin.categories.create',
    'update' => 'admin.categories.update',
]]);


Route::get('/articles/search', 'ArticlesController@search');
Route::post('/articles/datatable', 'ArticlesController@datatable')->name('admin.articles.datatable');
Route::post('/articles/recover', 'ArticlesController@recover')->name('admin.articles.recover');
Route::resource('/articles', 'ArticlesController', ['names' => [
    'index' => 'admin.articles',
    'create' => 'admin.articles.create',
    'update' => 'admin.articles.update',
]]);


Route::get('/servicedetails/search', 'ServicedetailsController@search');
Route::post('/servicedetails/datatable', 'ServicedetailsController@datatable')->name('admin.servicedetails.datatable');
Route::post('/servicedetails/recover', 'ServicedetailsController@recover')->name('admin.servicedetails.recover');
Route::resource('/servicedetails', 'ServicedetailsController', ['names' => [
    'index' => 'admin.servicedetails',
    'create' => 'admin.servicedetails.create',
    'update' => 'admin.servicedetails.update',
]]);


Route::get('/techdetails/search', 'TechdetailsController@search');
Route::post('/techdetails/datatable', 'TechdetailsController@datatable')->name('admin.techdetails.datatable');
Route::post('/techdetails/recover', 'TechdetailsController@recover')->name('admin.techdetails.recover');
Route::resource('/techdetails', 'TechdetailsController', ['names' => [
    'index' => 'admin.techdetails',
    'create' => 'admin.techdetails.create',
    'update' => 'admin.techdetails.update',
]]);


Route::get('/features/search', 'FeaturesController@search');
Route::post('/features/datatable', 'FeaturesController@datatable')->name('admin.features.datatable');
Route::post('/features/recover', 'FeaturesController@recover')->name('admin.features.recover');
Route::resource('/features', 'FeaturesController', ['names' => [
    'index' => 'admin.features',
    'create' => 'admin.features.create',
    'update' => 'admin.features.update',
]]);

//**GENERATOR_ROUTES**//
     
});