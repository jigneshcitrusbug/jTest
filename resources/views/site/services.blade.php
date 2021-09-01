@extends('layouts.site.index')


@php
$title = @$seo['title'] ? @$seo['title'] : "Services are fine tuned for the every needs of businesses.";
$description = @$seo['description'] ? @$seo['description'] : "Helping brands solve real problems with technology, We make technology simple for businesses across industries and geographies and accelerate their digital journey cost-effectively.";

$image = getasset('/assets/cover/services/main.png');

@endphp

@section('seo')


<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ $title}}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />

<meta name="twitter:title" content="{{ $title}}" />
<meta name="twitter:description" content="{{ $description }}" />

<meta name="twitter:image" content="{{ $image }}" />
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{{ $image }}" />

@endsection


@section('content')

<div class="inner-page">


    @component('layouts.site.shared.banners')

    @slot('images')
    <div class="slide slide1 " data-slide="we" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/services/main.png') }}')">

        </div>
    </div>

    @endslot
    @slot('description')
    <span id="slide-we" data-slide="we" data-slide-theme="dark" class="span-block main_slide">Our services are </span>
    <span class="span-block bold-line main_slide" data-slide="we" data-slide-theme="dark">
        <a>fine tuned to </a>
        <a> meet the technology </a></span>
    <span class="span-block main_slide" data-slide="we" data-slide-theme="dark">needs of today’s businesses.</span>
    @endslot



    @slot('desc')
    <p>Explore our range of services available for your business</p>
    @endslot

    @slot('nextsection')
    main-middle-area
    @endslot


    @endcomponent

    <div class="main-middle-area" id="main-middle-area">




        <x-package-service />

        <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />


        <x-package-projects type="error" limit="6" template="relatedprojects" />

        <x-package-testimonial />

        <x-package-tech />



    </div>
</div>
@endsection