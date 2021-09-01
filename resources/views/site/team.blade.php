@extends('layouts.site.index')
@section('content')

<div class="inner-page">



    @component('layouts.site.shared.banners', ['banner' => $banner])

    @slot('images')
    <div class="slide slide1 " data-slide="we" data-slide-type="image">
        <div class="slide_inner">
            <img src="{{ getasset('/assets/images/we.jpg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="slide slide2 " data-slide="developement" data-slide-type="image">
        <div class="slide_inner">
            <img src="{{ getasset('/assets/images/development.jpg') }}" alt="" srcset="">
        </div>
    </div>
    <div class="slide slide3 " data-slide="partner" data-slide-type="video">
        <div class="slide_inner">
            <video src="{{ getasset('/assets/images/partner.mp4') }}" autoplay preload loop>
                <source src="{{ getasset('/assets/images/partner.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
    @endslot
    @slot('description')
    <span id="slide-we" data-slide="we" data-slide-theme="dark" class="span-block main_slide">We are reliable</span>
    <span class="span-block bold-line">
        <a href="#" class="main_slide" data-slide="developement" data-slide-theme="light">Developement</a>
        <a href="#" class="main_slide" data-slide="partner" data-slide-theme="dark">Partner</a></span>
    <span class="span-block">since 2013</span>
    @endslot

    @slot('desc')
    <p>We are a digital agency that specializes in User Experience Design</p>
    @endslot

    @slot('nextsection')
    main-middle-area
    @endslot


    @endcomponent



    <div class="main-middle-area" id="main-middle-area">



        <section class="the-team-section">
            <div class="container-fluid">
                <div class="the-team-div container-lg1">

                    <div class="heading-div">
                        <div class="row align-items-end">
                            <div class="col-lg-2 col-md-4">
                                <h2 class="primary-color2 mb-0">
                                    {!! getSession('site_team_title', '') !!}
                                </h2>
                            </div>
                            <div class="col-lg-10 col-md-8">
                                <p>{!! getSession('site_team_description', '') !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="the-team-root">
                        <div class="row">
                            @if(count($teams) > 0)
                            @foreach($teams as $team)
                            <div class="col-lg-3 col-md-4">
                                <div class="team-box-div">
                                    <div class="team-position-div">

                                        {!! $team->designation !!}

                                    </div>
                                    <div class="team-thumb">
                                        @if($team->manyfile->where('file_type','teams_single_main')->count())
                                        <img src="{!! getasset(' $team->manyfile->where('file_type','teams_single_main')->first()->file_thumb_url')  !!}" loading="lazy" class="lazyload"
                                            alt="{{$team->name}},{{$team->designation}}" class="img-fluid img-team" />
                                        @endif
                                        <div class="outlined-box"></div>
                                    </div>
                                    <div class="name-text">
                                        <h5>{{$team->name}}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>
@endsection