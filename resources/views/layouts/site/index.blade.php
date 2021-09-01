<!DOCTYPE html>
<html lang="en-gb" dir="ltr">

<head>


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-control" content="public">
    @if (env('APP_ENV') != 'production' || !Route::current() || Route::current()->getName() == 'site.thankYou')
	<meta name="robots" content="noindex, nofollow">
    @else
    <meta name="robots" content="index, follow">
    @endif

    <link rel="canonical" href="{{ @$seo['url'] }}" />
    <meta charset="utf-8" />
    {{-- <base href="{{ env('APP_URL') }}" /> --}}

    @section('seo')
    <meta property="og:type" content="{{ @$seo['og_type'] }}" />
    <meta property="fb:pages" content="419783494723913" />
    <meta property="og:site_name" content="citrusbugtechnolabs" />
    <meta name="distribution" content="global" />
    <meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
    <meta property="og:title" content="{{ @$seo['title'] }}" />
    <meta property="og:description" content="{{ @$seo['description'] }}" />
    <meta property="og:url" content="{{ @$seo['url'] }}" />
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:site" content="@citrusbug" />
    <meta name="twitter:creator" content="@citrusbug" />
    <meta name="twitter:title" content="{{ @$seo['title'] }}" />
    <meta name="twitter:description" content="{{ @$seo['description'] }}" />
    <meta name="twitter:image" content="{{ @$seo['og_twitter_image'] }}" />

    <title>{{ @$seo['title']  }}</title>
    <meta name="description" content="{{ @$seo['description'] }}">
    <meta name="author" content="Citrusbug Technolabs">

    <meta property="og:image" content="{{ @$seo['og_image'] }}" />
    <link rel="alternate" href="{{ @$seo['url'] }}" hreflang="x-default" />

    @show

    <meta name="generator" content="Citrusbug Technolabs" />

    <!-- responsive -->
    <meta content='initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width' name='viewport' />
    <meta name="theme-color" content="#ed5c37">
    <meta name="msapplication-navbutton-color" content="#ed5c37">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ed5c37">
    <!-- Responsive END -->

    <!-- CSS -->
    <link href="{{ getasset('/favicon/favicon.ico')  }}" rel='shortcut icon'>


    <link rel="prefetch" href="{{ getasset('/assets/images/background.png')}}">
    <link rel="prefetch" href="{{ getasset('/assets/cover/home/sub1.jpg')}}">
    <link rel="prefetch" href="{{ getasset('/assets/cover/home/sub2.jpg')}}">
    <link rel="prefetch" href="{{ getasset('/assets/cover/home/sub3.jpg')}}">
    <link rel="prefetch" href="{{ getasset('/assets/cover/home/sub4.jpg')}}">
    <link rel="prefetch" href="{{ getasset('/assets/images/footer-line-logo.png')}}">


    <link rel="apple-touch-icon" sizes="57x57" href="{{ getasset('/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ getasset('/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ getasset('/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ getasset('/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ getasset('/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ getasset('/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ getasset('/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ getasset('/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ getasset('/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ getasset('/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ getasset('/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ getasset('/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ getasset('/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ getasset('/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ getasset('/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ed5c37">



    <link rel="dns-prefetch" href="https://www.google.com">
    <link rel="dns-prefetch" href="https://www.gstatic.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://d23dsrxzs83pl7.cloudfront.net">


    <link rel="preconnect" href="https://www.gstatic.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://d23dsrxzs83pl7.cloudfront.net">

    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiDyp8kv8JHgFVrJJLmr19VF9eO.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/feather/Feather.ttf?sdxovp" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiEyp8kv8JHgFVrJJfecg.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://d23dsrxzs83pl7.cloudfront.net/assets/fonts/gstatic/pxiByp8kv8JHgFVrLFj_Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/feather/Feather.ttf?sdxovp')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiDyp8kv8JHgFVrJJLmr19VF9eO.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiEyp8kv8JHgFVrJJfecg.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">

    <link rel="preload" href="{{ getasset('/assets/fonts/gstatic/pxiByp8kv8JHgFVrLFj_Z1xlFQ.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
    @show

    {!! getSession('site_custom_head') !!}




    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:,100,100i,200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        media="all" type="text/css" /> --}}

    @stack('css')

    <link rel="stylesheet" href="{{ getasset('/assets/css/select2.min.css')}}" media="all" type="text/css" />
    <link rel="stylesheet" href="{{ getasset('/assets/css/site.css')}}" media="all" type="text/css" />

    @stack('cssv2')

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PVSLJGS');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body theme="{{@$theme}}" slide-theme="">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVSLJGS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="wrapper" class="wrapper home-wrapper inner-page">

        @include('layouts.site.shared.menu')

        @include('layouts.site.shared.projectinquiry')

        @yield('content')

        @include('layouts.site.shared.footer')

        {{-- <section class="loading"> 
            <div class="loding_container">
                <div class="logo-div">
                    <a class="logo_link clearfix" href="{{route('site.home')}}">
        <img src="{{ getasset('/assets/images/logo.svg')}}" class="img-fluid logo_img main-logo" alt="logo" />
        </a>
    </div>
    </div>
    </section> --}}
    </div>

    @section('css')

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" /> --}}

    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        media="all" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" media="all" type="text/css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        media="all" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap&subset=latin-ext"
        media="all" type="text/css" /> --}}

    <!-- CSS END -->
    @show

    {!! getSession('site_external_css') !!}

    <script src="{{ getasset('/js/site/custom.js')}}" ></script>
    <script src="{{ getasset('/assets/js/select2.full.js')}}" ></script>

    {{-- <script src="{{ getasset('/app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script> --}}

    {{-- {!! getSession('google_analytics') !!} --}}

    @stack('js')
    <!-- <script src="{{ getasset('/assets/js/modernizr.js')}}"></script> -->
    <!--[if IE]>
        <script src="assets/js/html5.js"></script>
    <![endif]-->
    {{-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> --}}

    {{-- <script src="{{ getasset('/assets/js/defer.js')}}"></script> --}}

    {!! getSession('site_external_js') !!}
    @show
    <script>
        function downloadJSAtOnload() {
            var element = document.createElement("script");
            element.async = true;
            element.src = "{{ getasset('/assets/js/defer.js')}}";
            document.body.appendChild(element);
        }

        if (window.addEventListener) {
            window.addEventListener("load", downloadJSAtOnload, false);
        } else if (window.attachEvent) {
            window.attachEvent("onload", downloadJSAtOnload);
        } else {
            window.onload = downloadJSAtOnload;
        }
    </script>
    <script>
        const targets = document.querySelectorAll('img');
        const lazyLoad = target => {
            const io = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        const src = img.getAttribute('data-src');
                        if (src) {
                            img.setAttribute('src', src);
                            img.classList.add('fade');

                        }
                        observer.disconnect();
                    }
                });
            });
            io.observe(target);
        };
        targets.forEach(lazyLoad);

        const targets_divs = document.querySelectorAll('div.lazy_bg');

        const lazyLoad_bgs = target => {
            const io = new IntersectionObserver((entries, observer) => {

                entries.forEach(entry => {


                    if (entry.isIntersecting) {

                        const div = entry.target;
                        const src = div.getAttribute('data-src');
                        if (src) {

                            div.style.backgroundImage = "url('" + src + "')";
                        }
                        observer.disconnect();
                    }
                });
            });
            io.observe(target);
        };
        targets_divs.forEach(lazyLoad_bgs);
    </script>
    <script>
        window.onload = () => {
            'use strict';
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/js/sw.js');
            }
        }
    </script>

    {{-- <script>
    var onloadCallback = function() {
    var recaptchas = document.querySelectorAll('div[class=g-recaptcha]');
    for( i = 0; i < recaptchas.length; i++) {
        grecaptcha.render( recaptchas[i].id, {
        'sitekey' : '6LdHG9sUAAAAAFl3jkpUDIKVKXkEn0nuwLNIUMAv',
        'callback' : recaptchas[i].id+'_callback'
        })
    }
}
</script> --}}

    <script>
        var onloadCallback = function() {
            grecaptcha.render('inquiry_captcha', {
                'sitekey': '6LdHG9sUAAAAAFl3jkpUDIKVKXkEn0nuwLNIUMAv',
                'callback': function(response) {
                    console.log(response);
                    document.getElementById('hd_inquiry_captcha').value = response;
                }
            });



            if (document.getElementById('contact_captcha') !== null) {
                grecaptcha.render('contact_captcha', {
                    'sitekey': '6LdHG9sUAAAAAFl3jkpUDIKVKXkEn0nuwLNIUMAv',
                    'callback': function(response) {
                        console.log(response);
                        document.getElementById('hd_contact_captcha').value = response;
                    }
                })
            }
            if (document.getElementById('career_captcha') !== null) {
                grecaptcha.render('career_captcha', {
                    'sitekey': '6LdHG9sUAAAAAFl3jkpUDIKVKXkEn0nuwLNIUMAv',
                    'callback': function(response) {
                        console.log(response);
                        document.getElementById('hd_career_captcha').value = response;
                    }
                })
            }
        }
    </script>
    {{--
<script>
    var inquiry_captcha_callback = function(){
        return new Promise(function(resolve, reject) {  
            if (inquiry_captcha_widget === undefined) {
                console.log('Recaptcha non definito'); 
                reject();
            }
            var response = inquiry_captcha_widget.getResponse();
            if (!response) {
                console.log('Coud not get recaptcha response'); 
                reject();
            }
            document.getElementById('hd_inquiry_captcha').value = response;
            /*$("#hd_inquiry_captcha").val(response);
            grecaptcha.reset();*/
        });
    };
</script>
<script>
    var contact_captcha_callback = function(){
        return new Promise(function(resolve, reject) {  
            if (contact_captcha_widget === undefined) {
                console.log('Recaptcha non definito'); 
                reject();
            }
            var response = contact_captcha_widget.getResponse();
            if (!response) {
                console.log('Coud not get recaptcha response'); 
                reject();
            }
            document.getElementById('hd_contact_captcha').value = response;
            /* $("#hd_contact_captcha").val(response); 
            grecaptcha.reset();*/
        });
    };
    /*
    var inquiry_captcha_callback = function (response) {
        $("#hd_inquiry_captcha").val(response);
    };
    var contact_captcha_callback = function(response) {
        $("#hd_contact_captcha").val(response);
    };
    */
</script> --}}

    @stack('scripts')

    @show

</body>

</html>