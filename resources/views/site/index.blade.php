@extends('layouts.site.index')



@php
$title = @$seo['title'] ? @$seo['title'] : "Citrusbug Technolabs Leading Software Company in India";
$description = @$seo['description'] ? @$seo['description'] : "Citrusbug Technolabs offers services such as web
development, mobile app development, AI, ML, Cloud and custom software development in India";
$image = getasset('/assets/cover/home/sub1.jpg');
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

@component('layouts.site.shared.banners')

@slot('images')
<div class="slide slide1 " data-slide="we" data-slide-type="image">
    <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/home/sub1.jpg') }}')">

    </div>
</div>
<div class="slide slide2 " data-slide="developement" data-slide-type="image">
    <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/home/sub2.jpg') }}')">

    </div>
</div>
<div class="slide slide3 " data-slide="partner" data-slide-type="image">
    <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/home/sub3.jpg') }}')">

    </div>
</div>
<div class="slide slide4 " data-slide="smb" data-slide-type="image">
    <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/home/sub4.jpg') }}')">

    </div>
</div>

@endslot
@slot('description')
<span id="slide-we" data-slide="we" data-slide-theme="dark" class="span-block main_slide">Building a better</span>
<span class="span-block bold-line" style="cursor:pointer">
    <a class="main_slide" data-slide="developement" data-slide-theme="dark">digital</a>
    <a class="main_slide" data-slide="partner" data-slide-theme="dark">future</a></span>
<span class="span-block main_slide" data-slide="smb" data-slide-theme="dark">for SMB’s</span>
@endslot

@slot('desc')
<p>We design great experiences for your digital journey</p>
@endslot

@slot('nextsection')
main-middle-area
@endslot


@endcomponent

<div class="main-middle-area" id="main-middle-area">




    <x-package-tech />


    <x-package-projects limit="4" menu="true" />


    <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />



    <x-package-testimonial />


    <x-package-service />

</div>
@endsection