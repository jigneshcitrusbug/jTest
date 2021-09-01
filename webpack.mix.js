const mix = require('laravel-mix');

// require('laravel-mix-imagemin');

mix.copyDirectory('resources/app-assets', 'public/app-assets');
mix.copyDirectory('resources/js', 'public/js');


mix.sass('resources/app-assets/css/custom.scss', 'public/app-assets/css/custom.css')
    .options({
        processCssUrls: false
    });

mix.styles([
    'public/app-assets/fonts/feather/style.min.css',
    'public/app-assets/fonts/simple-line-icons/style.css',
    'public/app-assets/fonts/font-awesome/css/font-awesome.min.css',

    'public/app-assets/vendors/css/*.css',

    'public/app-assets/css/app.css',
    'public/app-assets/lightbox/css/lightbox.css',
    'public/app-assets/lightbox/css/bootstrap-tagsinput.css',
    'public/app-assets/css/custom.css'

], 'public/app-assets/css/admin.css');


mix.scripts([
    'public/app-assets/vendors/js/core/jquery-3.2.1.min.js',
    'public/app-assets/vendors/js/core/popper.min.js',
    'public/app-assets/vendors/js/core/bootstrap.min.js',
    'public/app-assets/vendors/js/perfect-scrollbar.jquery.min.js',
    'public/app-assets/vendors/js/prism.min.js',
    'public/app-assets/vendors/js/jquery.matchHeight-min.js',
    'public/app-assets/vendors/js/screenfull.min.js',
    'public/app-assets/vendors/js/pace/pace.min.js',
    'public/app-assets/vendors/js/chartist.min.js',
    'public/app-assets/js/app-sidebar.js',
    'public/app-assets/js/notification-sidebar.js',
    'public/app-assets/js/customizer.js',
    'public/app-assets/lightbox/js/lightbox.js',
    'public/app-assets/lightbox/js/bootstrap-tagsinput.js'

], 'public/js/admin/admin.js');



//Front-End 

mix.copyDirectory('resources/favicon', 'public/favicon');
mix.copyDirectory('resources/assets/cover', 'public/assets/cover');
mix.copyDirectory('resources/assets/css', 'public/assets/css');
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');
mix.copyDirectory('resources/assets/fullpage', 'public/assets/fullpage');
mix.copyDirectory('resources/assets/images', 'public/assets/images');
mix.copyDirectory('resources/assets/js', 'public/assets/js');


// mix.sass('resources/assets/css/style.scss', 'public/css/site/style.css')
// mix.sass('resources/assets/css/custom.scss', 'public/css/site/custom.css')
// mix.sass('resources/assets/css/animation.scss', 'public/css/site/animation.css')
// mix.sass('resources/assets/css/typo.scss', 'public/css/site/typo.css')

// mix.styles([
//     'resources/assets/css/bootstrap.min.css',
//     'public/css/site/typo.css',

//     'resources/assets/css/owl.carousel.min.css',
//     'resources/assets/css/owl.theme.default.min.css',
//     'public/css/site/style.css',
//     'public/css/site/custom.css', 
//     'public/css/site/animation.css',

// ], 'public/css/site/site.css'); 


mix.sass('resources/assets/css/citrusbug.scss', 'public/assets/css/site.css')
    .options({
        processCssUrls: false
    });


mix.scripts([

    'resources/assets/js/jquery-3.4.1.min.js',
    'resources/assets/js/jquery-noconflict.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/gsap.min.js',
    'resources/assets/js/ScrollMagic.min.js',
    'resources/assets/js/animation.gsap.js',
    // 'resources/assets/js/debug.addIndicators.min.js',
    'resources/assets/js/smooth-scrollbar.js',

    'resources/app-assets/vendors/js/jqBootstrapValidation.js',

    'resources/assets/js/owl.carousel.js',

    // 'resources/assets/js/custom.js',
    'resources/assets/js/animation.js',
    // 'resources/assets/js/lazysizes.min.js',
    'resources/assets/js/site.js',
    // 'resources/assets/fullpage/js/fullpage.js',
    // 'resources/assets/fullpage/js/example.js' 
    'resources/assets/js/isotope.pkgd.min.js',
    'resources/assets/js/imagesloaded.pkgd.min.js',
], 'public/js/site/custom.js');



// mix.minify('public/js/site/custom.js');

// mix.imagemin(
//     'assets/cover/**/*.png',
//     {
//         context: 'resources',
//     },
//     {
//         optipng: {
//             optimizationLevel: 5
//         },
//         jpegtran: null,
//         plugins: [
//             require('imagemin-mozjpeg')({
//                 quality: 80,
//                 progressive: true,
//             }),
//         ],
//     }
// );