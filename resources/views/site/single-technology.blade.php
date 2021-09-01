@extends('layouts.site.index')


@php

$param = unserialize($technology->param);

$techservices = @$param['services'];
if($techservices){
$tmp = explode("\n",$techservices);
if($tmp){
$techservices = array_chunk($tmp,count($tmp)/2);
}
}

$hiretext = @$param['hiretext'];
$hiretitle = @$param['hiretitle'];

$projects_title = @$param['projects_title'];
$projects_text = @$param['projects_text'];

$tag_line = @$param['tag_line'];

$services_title = @$param['services_title'];

$techdetails = @$technology->techdetails;

$image_main = @$param['image_main'];
$image_cover = @$param['image_cover'];

$technology_title = @$param['sub_title'] ?: $technology->title;
$seo['title'] = @$seo['title'] ? @$seo['title'] : $technology_title ;

$seo['description'] = @$seo['description'] ? @$seo['description'] : $tag_line;


@endphp


@section('seo')

<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ @$seo['title']}}" />
<meta property="og:description" content="{{ $seo['description'] }} " />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />
<meta name="twitter:title" content="{{ @$seo['title']}}" />
<meta name="twitter:description" content="{{ @$seo['description'] }}" />
<meta name="twitter:image" content="{{ getasset($image_cover) }}" />

<title>{{ @$seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!getasset($image_cover) !!}" />
@endsection

@section('content')

<div class="inner-page" itemscope>

    <section class="banner-section banner-workdetail-page banner-technology-detail changetheme">
        <!-- <div class="line-1"></div> -->
        @if($image_cover)
        <img src="{{ getasset($image_cover) }}" class="banner-img" alt="banner" itemprop="image" />
        @endif
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">




                        <div class="content-div" itemscope>
                            <div class="heading-content heading-workdetail" itemprop="name">

                                <h1 class="view-allprojects">
                                    <a>{!! @$param['sub_title'] ?: $technology->title !!}</a>
                                </h1>
                                <p class="tag_line"> {!! @$param['tag_line'] !!} </p>


                                <!-- <meta content="{{ \Str::limit( strip_tags(@$param['tag_line']) ,100,'...') }}"> -->

                                <div class="banner-content-workdetail">



                                    <div class="content-two">
                                        {{-- <p><a href="#main-middle-area">View Description</a></p>

                                        <div class="arrrow-div">
                                                <a href="#main-middle-area"><img src="{{ getasset('/assets/images/icons/arrow-verticle-line.png')}}"
                                        class="arrow-lines arrow-horizontal-lines" alt="arrow" /></a>
                                    </div> --}}
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
            {{--
            <div class="row">
                <div class="col-lg-5">


                </div>


                <span itemprop="author" style="display:none">Citrusbug Technolabs</span>

                <span itemprop="datePublished" style="display:none">{{$technology->created_at}}</span>
            <span itemprop="dateModified" style="display:none">{{$technology->updated_at}}</span>

            <div itemprop="publisher">
                <span itemprop="url">http</span>
                <span itemprop="name">Citrusbug Technolabs</span>


                <div itemprop="logo">
                    <meta itemprop="url" content="{{url('/')}}">
                    <h2 itemprop="name">Citrusbug Technolabs</h2>
                    <img src="{{ url(getasset('/assets/images/logo.svg')) }}" alt="Citrusbug Technolabs" itemprop="contentUrl" />
                    <span itemprop="author">Citrusbug Technolabs</span>

                </div>

            </div>
            <meta itemprop="mainEntityOfPage" content="{{ @$seo['url'] }}">




        </div>
        --}}
</div>
</div>
</section><!--  end of banner  -->





<div class="main-middle-area " id="main-middle-area">


    <section class="tech-detail-section nh" itemscope>
        <div class="container-fluid">
            <div class="tech-detail-inner container-lg-1">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tech-detail-heading" itemprop="articleBody">
                            {!! $technology->description !!}
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                        <div class="col-lg-8">
                            <div class="tech-icon-box-root">
                                @php
                                $tech_images = $technology->technologies_multiple_tech;

                                @endphp
                                @if($tech_images)
                                @foreach($tech_images as $tech_image)
                                <div class="tech-icon-box" itemprop="articleBody">
                                    <img data-src="{{ getasset($tech_image->file_thumb_url) }}" alt="technology"
                loading="lazy" class="lazyload">
            </div>
            @endforeach
            @endif

        </div>
</div>
</div> --}}


</div>
</div>

</section>







<section class="scope-of-work-section changetheme">
    <div class="container-fluid">
        <div class="scope-of-work-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="scope-of-work-heading">
                        <h2><a class="heading-link"> {{ @$services_title }} </a></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($techdetails)
                @php
                $class = '';
                $count = count($techdetails);
                if($count % 3==0 ){
                $grid=3;
                $class = 'grid_3';
                }else if($count % 2 == 0 ){

                if( $count <= 2){ $grid=2; $class='grid_2' ; }
                else{ $grid=2; $class='grid_4' ; } }
                else{ $grid=2; $class='grid_4' ; } 
                @endphp @foreach($techdetails as $techservice) 
                <div class="col-xl-{{ 12 / $grid }} col-lg-{{ 12 / $grid }} col-md-12 col-sm-12 col-12">
                    <div class="scope-of-work-grid-listing {{$class}}">
                        <div class="icon">
                            <img data-src="{{ getasset($techservice->icon) }}" alt="{{ getasset($techservice->icon) }}" class="lazyload">
                        </div>
                        <div class="details">
                            <div class="title">
                                <h4>{{ $techservice->title }}</h4>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>





{!! @$technology->content !!}





<x-package-projects :tech="$technology->id" :technologyObj="$technology" limit="3" template="projectlist" />


<x-package-testimonial />

<x-package-article title="Related Articles" :tag="$technology->title" />


<x-package-tech />


<x-package-partner hiretitle="" developer="Dedicated" template="partner2" />




<x-package-service />
@if($technology->faqs && $technology->faqs->count())
@include ('site.faqs',['item'=>$technology])
@endif

</div>
</div>
@endsection