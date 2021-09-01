@extends('layouts.site.index')


@php
$title = @$seo['title'] ? @$seo['title'] : "Make technology a key pillar of your business growth";
$description = @$seo['description'] ? @$seo['description'] : "Grow your business in the digital era with our specialized technology such as Python, React JS, Node, React Native, PHP, Angular, ML & AI, Cloud & DevOps.";
$image = getasset('/assets/cover/tech/main.png');
@endphp

@section('seo')
<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $description }}" />
<meta name="twitter:image" content="{{ $image }}" />
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{{ $image }}" />
@endsection

@section('content')

<div class="inner-page">

    @component('layouts.site.shared.banners', ['banner' => @$banner])

    @slot('images')
    <div class="slide slide1 " data-slide="we" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/tech/main.png') }}')">

        </div>
    </div>
    <div class="slide slide2 " data-slide="developement" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/tech/sub2.png') }}')">

        </div>
    </div>
    <div class="slide slide2 " data-slide="sub3" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/tech/sub3.png') }}')">

        </div>
    </div>

    @endslot
    @slot('description')
    <span id="slide-we" data-slide="we" data-slide-theme="dark" class="span-block main_slide">Make technology </span>
    <span class="span-block bold-line main_slide" data-slide="developement" data-slide-theme="dark">
        a <a>key pillar</a>
        of your <a class=""></a></span>
    <span class="span-block main_slide" data-slide="sub3" data-slide-theme="dark"> business growth</span>
    @endslot

    @slot('desc')
    {{-- <p>We are a digital agency that specializes in User Experience Design</p> --}}
    @endslot

    @slot('nextsection')
    main-middle-area
    @endslot


    @endcomponent

    <div class="main-middle-area" id="main-middle-area">

        <x-package-tech template="techlist" />






        <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />


        <x-package-projects type="error" limit="6" template="relatedprojects" />




        <x-package-service />

    </div>
</div>
@endsection