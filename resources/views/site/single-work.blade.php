@extends('layouts.site.index')

@php

$sows = explode("\n",$work->sow);
$sowlist = array_chunk($sows , (int)(count($sows)/2)+1 );

$param = unserialize($work->param);

$project_type = @$param['project_type'];

$image_menu = @$param['image_menu'];
$image_main = @$param['image_main'];
$image_thumb_1 = @$param['image_thumb_1'];
$image_thumb_2 = @$param['image_thumb_2'];
$image_cover = @$param['image_cover'];
$image_scroll = @$param['image_scroll'];

$seo['title'] = @$seo['title'] ? @$seo['title'] : $work->title;

$seo['description'] = @$seo['description'] ? @$seo['description'] : $work->desc;

@endphp

@section('seo')

<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ @$seo['title'] }}" />
<meta property="og:description" content="{{ $seo['description'] }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />
<meta name="twitter:title" content="{{ @$seo['title']}}" />
<meta name="twitter:description" content="{{ @$seo['description'] }}" />
<meta name="twitter:image" content="{!!  $image_cover  !!}" />
<title>{{ @$seo['title'] }} - work</title>
<meta name="description" content="{{ @$seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!getasset($image_cover) !!}" />
@endsection

@section('content')

<div class="inner-page">


    <section class="banner-section banner-workdetail-page changetheme">
        <!-- <div class="line-1"></div> -->
        <img src="{!!  getasset(@$image_cover)  !!}" class="banner-img" alt="{{ $work->title}}" itemprop="image" />
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="content-div">
                            <div class="heading-content heading-workdetail">
                                <div class="view-allprojects">
                                    <a href="{{route('site.works')}}">View all Projects</a>
                                </div>

                                <h1 itemprop="name">{{ $work->title}}</h1>
                                <p itemprop="headline">
                                    {{ $work->desc}}
                                </p>


                            </div>

                            <div class="banner-content-workdetail">
                                <div class="content-one">
                                    @php


                                    $techno = \Cache::remember('work_tech_'.$work->id, 60*24, function () use ($work) {

                                    return $work->technologies()->limit(4)->get()->pluck('title','slug');

                                    });


                                    $tag = '';
                                    if($techno){
                                    echo "<p>";
                                        foreach($techno as $slug=>$tech){

                                        echo '<a>'.$tech.'</a>';

                                        $tag .= ' '.$tech;

                                        }
                                        echo "</p>";
                                    }
                                    @endphp

                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                {{--
                <span itemprop="author" style="display:none">Citrusbug Technolabs</span>

                <span itemprop="datePublished" style="display:none">{{$work->created_at}}</span>
                <span itemprop="dateModified" style="display:none">{{$work->updated_at}}</span>

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
                --}}
                <div class="row">
                    <div class="col-lg-5">


                    </div>
                    <div class="col-lg-7">

                        @php
                        if($project_type == 'website'){
                        $image = getasset('/assets/images/imac-1.png');
                        }else{
                        $image = getasset('/assets/images/iphone');
                        }

                        @endphp




                        <div class="banner-img-right">

                            <div class="banner-work-img {{ $project_type == 'website' ? 'mac-frame' : 'mobile-mockup-img' }} ">


                                @if($project_type == 'website')
                                <img src="{{getasset('/assets/images/imac-1.png')}}" alt="mac Frame">
                                @else
                                <img src="{{getasset('/assets/images/iphone.png')}}" alt="iphone Frame">
                                @endif

                                <div class="mac-frame-inner">
                                    <img src="{!!  getasset(@$image_scroll)  !!}" alt="{{ $work->title}}" itemprop="image">
                                </div>


                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section><!--  end of banner  -->


    <div class="main-middle-area" id="main-middle-area">




        <section class="our-challanges-section">
            <div class="container-fluid">
                <div class="our-challanges-inner">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="our-challanges-heading" itemprop="articleBody">

                                {!! $work->description !!}


                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>


        @if($work->features)
        <section class="scope-of-work-section changetheme" itemprop="articleBody">
            <div class="container-fluid">
                <div class="scope-of-work-inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="scope-of-work-heading">
                                <h2>Services we offered</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        @php
                        $class = '';
                        $count = count($work->features);
                        if($count % 3==0 ){
                        $grid=3;
                        $class = 'grid_3';
                        }else if($count % 2 == 0 ){

                        if( $count <= 2){ $grid=2; $class='grid_2' ; }else{ $grid=2; $class='grid_4' ; } }else{ $grid=2; $class='grid_4' ; } @endphp @foreach($work->features as $feature)

                            @php
                            $param = unserialize($feature->param);
                            $icon = @$param['icon'];
                            @endphp

                            <div class="col-xl-{{ 12 / $grid }} col-lg-{{ 12 / $grid }} col-md-12 col-sm-12 col-12">
                                <div class="scope-of-work-grid-listing {{$class}}">
                                    <div class="icon">
                                        <img data-src="{{ getasset($icon) }}" alt="{{ getasset($feature->title) }}" loading="lazy" class="lazyload">
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <h4>{{ $feature->title }}</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                    </div>
                </div>
        </section>

        @endif


        <section class="image-slider-section nh">
            <div class="container-fluid">
                <div class="image-slider-inner">
                    <div class="row">
                        <div class="col-lg-12">

                            <div id="project_images" class=" owl-carousel owl-theme">

                                @php
                                $images = $work->projects_multiple_images;
                                @endphp
                                @foreach ($images as $item)
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="img-slide">
                                                <img src="{{ getasset($item->file_thumb_url) }}" class="img-fluid" alt="{!! $work->title !!}" itemprop="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />

        <x-package-projects type="error" limit="3" template="relatedprojects" :project="$work" />

        <x-package-testimonial />

        <x-package-article title="Latest Articles" :tag="$tag" />



        <x-package-tech />

        <x-package-service />



    </div>
</div>
@endsection


@push('scripts')
<script>
    function execurteSingleWorkScript() {
        $('#project_images').owlCarousel({
            loop: true,
            margin: 20,
            stagePadding: 120,
            items: 2,
            responsiveClass: true,
            autoplay: true,
            nav: false,
            dots: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    margin: 20,
                    stagePadding: 20,
                    items: 1,

                },
                600: {
                    items: 1,

                },
                1000: {
                    items: 2,

                }
            }

        });
    }

    if (window.addEventListener) {
        window.addEventListener("load", execurteSingleWorkScript, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", execurteSingleWorkScript);
    } else {
        window.onload = execurteSingleWorkScript;
    }
</script>
@endpush