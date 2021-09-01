<?php

// $routeConfig = [
//     'namespace' => 'Barryvdh\Debugbar\Controllers',
//     'prefix' => Config::get('debugbar.route_prefix'),
//     'domain' => Config::get('debugbar.route_domain'),
// ];

// Route::group($routeConfig, function() {
//     Route::get('open', [
//         'uses' => 'OpenHandlerController@handle',
//         'as' => 'debugbar.openhandler',
//     ]);

//     Route::get('clockwork/{id}', [
//         'uses' => 'OpenHandlerController@clockwork',
//         'as' => 'debugbar.clockwork',
//     ]);

//     Route::get('assets/stylesheets', [
//         'uses' => 'AssetController@css',
//         'as' => 'debugbar.assets.css',
//     ]);

//     Route::get('assets/javascript', [
//         'uses' => 'AssetController@js',
//         'as' => 'debugbar.assets.js',
//     ]);
// });

Route::get('/clear', 'Site\HomeController@clear')->name('site.clear');
Route::get('/speed-up', 'Site\HomeController@speedUP')->name('site.speedUP');
Route::get('/', 'Site\HomeController@index')->name('site.home');
Route::get('/about', 'Site\AboutController@index')->name('site.about');
Route::get('/team', 'Site\TeamController@index')->name('site.team');

Route::get('/career', 'Site\CareerController@index')->name('site.careers');
Route::get('/career/{slug?}', 'Site\CareerController@career')->name('site.career');
Route::post('/career/save', 'Site\CareerController@save')->name('site.career.save');



Route::get('/work', 'Site\WorkController@index')->name('site.works');
Route::get('/work/{slug?}', 'Site\WorkController@work')->name('site.work');

Route::get('/technology', 'Site\TechnologyController@index')->name('site.technology');
Route::get('/technology/{slug?}', 'Site\TechnologyController@tech')->name('site.tech');

Route::get('/services', 'Site\ServiceController@index')->name('site.services');
Route::get('/services/{slug?}', 'Site\ServiceController@service')->name('site.service');


Route::get('/sitemap', 'Site\SitemapController@index')->name('site.sitemap');
Route::get('/sitemap/xml', 'Site\SitemapController@xml')->name('site.sitemap.xml');

Route::post('/inquiries/save', 'Site\InquiriesController@save')->name('site.inquiries.save');

Route::get('/unsubscribe', 'Site\InquiriesController@unsubscribe')->name('site.unsubscribe');
Route::post('/unsubscribe/save', 'Site\InquiriesController@unsubscribesave')->name('site.unsubscribe.save');

Route::get('/blog', 'Site\BlogController@index')->name('site.blog');
Route::get('/article/{slug}', 'Site\BlogController@article')->name('site.article');

Route::get('/contact', 'Site\InquiriesController@index')->name('site.contact');
Route::get('/contacts', function () {
    return redirect('/contact');
});
Route::get('/article', function () {
    return redirect('/blog');
});

Route::get('/hire-programmers', 'Site\HireProgrammersController@index')->name('site.hire-programmers');
Route::get('/hire-programmers/{slug?}', 'Site\HireProgrammersController@hireTechnology')->name('site.hire-program');

Route::get('thank-you', 'Site\HomeController@thankYou')->name('site.thankYou'); 

 
 
// $routes = [
//     'a' => 'Site\HomeController@index',
//     'b' => 'Site\HomeController@index',
//     'c' => 'Site\HomeController@index',
// ];

// foreach($routes as $key=>$route){
//     Route::get('/'.$key, $route)->name('site.home.'.$key);
// }


// Route::get('/sendmail', 'Site\InquiriesController@sendmail')->name('site.inquiries.save');

// Route::get('mailable', function () {
//     dd("Sdsds");
//     $invoice = \App\Inquiries::get()->first();
//     return new App\Mail\InquiryRecived($invoice,true);
// });


// Route::get('mailable', function () {
//     $invoice = \App\Resumes::get()->first();
     
    
    
//     return new App\Mail\CareerRecived($invoice);
// });
