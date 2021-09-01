@php( $asset_url = getasset('/citrusbug/assets/') )
@php( $_url = url('/') )
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
	@if (env('APP_ENV') != 'production' || !Route::current() || Route::current()->getName() == 'site.thankYou')
	<meta name="robots" content="noindex, nofollow">
    @else
    <meta name="robots" content="index, follow">
    @endif
	<meta property="og:type" content="{{ @$seo['og_type'] }}" />
    <meta property="fb:pages" content="419783494723913" />
    <meta property="og:site_name" content="citrusbugtechnolabs" />
    <meta name="distribution" content="global" />
    <meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
    <meta property="og:title" content="{{ @$seo['title'] }}" />
    <meta property="og:description" content="{{ @$seo['description'] }}" />
    <meta property="og:url" content="{{ @$seo['url'] }}" />
	<link  rel="canonical" href="{{ @$seo['url'] }}"  />
	
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
	<meta name="keywords" content="{{ @$seo['keywords'] }}" />
	
	<meta property="og:image" content="{{ @$seo['og_image'] }}" />
    <link rel="alternate" href="{{ @$seo['url'] }}" hreflang="x-default" />
	

    <meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv=X-UA-Compatible content="IE=edge">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	
    <meta name="theme-color" content="#ED5C37">
	<meta name="msapplication-navbutton-color" content="#ED5C37">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#ED5C37">
	
	<link rel="apple-touch-icon" sizes="57x57" href="{{ $_url }}/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ $_url }}/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ $_url }}/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ $_url }}/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ $_url }}/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ $_url }}/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ $_url }}/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ $_url }}/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $_url }}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ $_url }}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $_url }}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ $_url }}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ $_url }}/favicon/favicon-16x16.png">
	
	<link href="{{ $asset_url }}/images/favicon.png" rel='shortcut icon'>
	<link href="{{ $asset_url }}/fonts/poppins/poppins-font.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/feather.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/fonts/material-icons/material-icons.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/owl.carousel.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/style.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/technology-syle.min.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ $asset_url }}/css/custom.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ $asset_url }}/intlTelInput/css/intlTelInput.css">
	@stack('css')
	<script src="https://www.google.com/recaptcha/api.js?render=6LdEDVwaAAAAAOVlPgX0wbGTYKqO1W6wjQPBBmuB"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159322890-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-159322890-1');
	</script>
</head>

<body>

    <div id="wrapper" class="wrapper">

        @include('layouts.site-new.shared.header-left')

        @include('layouts.site-new.shared.header-right')
		
        @include('layouts.site-new.shared.header-center')

        @yield('content')

        @include('layouts.site-new.shared.footer')

    </div>

    
    <script src="{{ $asset_url }}/js/jquery.min.js" ></script>
	<script src="{{ $asset_url }}/js/popper.min.js" ></script>
	<script src="{{ $asset_url }}/js/bootstrap.min.js"></script>
	<script src="{{ $asset_url }}/js/owl.carousel.min.js"></script>
	<script src="{{ $asset_url }}/js/get-owl-slider.min.js"></script>
	<script src="{{ $asset_url }}/js/technology-js.min.js"></script>
	<script src="{{ $asset_url }}/js/custom.min.js"></script>
	<script src="{{ $asset_url }}/intlTelInput/js/intlTelInput.js"></script>
	<script src="{{ $asset_url }}/js/pages/hire-form.js"></script>
	
	<script src="{{ $_url }}/app-assets/vendors/js/jqBootstrapValidation.js"></script>
	
	@stack('js')  
</body>
</html>