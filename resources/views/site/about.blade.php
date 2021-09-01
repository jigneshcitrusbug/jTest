@extends('layouts.site.index')



@php
$title = @$seo['title'] ? @$seo['title'] : "There’s more to us than just creating beautiful designs";
$description = @$seo['description'] ? @$seo['description'] : "At Citrusbug, we build lasting relationships with businesses by providing them top notch custom software solutions. From a humble beginning in 2013, we have grown into a premium digital partner for SMB’s and startup businesses by helping them build enterprise custom software solutions";

$image = getSession('site_about_cover_image', getasset('/assets/cover/aboutus/main.jpg') );
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

    <section class="banner-section banner-workdetail-page team-banner changetheme">
        <img data-src="{{ getasset('/assets/cover/aboutus/main.jpg') }}" class="banner-img lazyload" alt="banner" />
        <!-- <div class="line-1"></div> -->
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">



                        <div class="content-div">
                            <div class="heading-content heading-workdetail ">
                                <div class="view-allprojects">
                                    <a href="">About us</a>
                                </div>

                                <h1>There’s more to us than just creating beautiful designs.</h1>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">


                    </div>

                </div>
            </div>
        </div>
    </section><!--  end of banner  -->



    <div class="main-middle-area" id="main-middle-area">




        <section class="about-us-section" id="about-us-details">
            <div class="container-fluid">
                <div class="about-us-div">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-div heading-center-div mb-40">
                                {!! getSession('site_about_title', '') !!}
                                {!! getSession('site_about_description', '') !!}
                            </div>
                        </div>
                    </div>


                </div>

                <div class="img-banner-div">

                    <img data-src="{{ getSession('site_about_baner_image',  getasset('/assets/cover/aboutus/background.png') ) }}" alt="img-banner" class="img-fluid img-full lazyload" loading="lazy" />

                </div>

            </div>

        </section>


        <section class="committed-section">
            <div class="container">
                <div class="committed-div container-lg-2">
                    <div class="row align-items-center mt-30">
                        <div class="col-lg-12 col-md-12">
                            <div class="committed-root">
                                <h2>{!! getSession('site_about_excellence_title', '') !!}</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="content-apply">
                                            {!! getSession('site_about_excellence_description', '') !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="aboutus-value-section bb">
            <div class="container">
                <div class="the-team-div container-lg-2">

                    <div class="heading-div">
                        <div class="row  ">
                            <div class="col-lg-4 col-md-4">
                                {!! getSession('site_about_core_values_title', '') !!}

                            </div>
                            <div class="col-lg-8 col-md-8">
                                <p>{!! getSession('site_about_core_values_description', '') !!}</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="image-slider-inner">
                    <div class="row">

                        <div class=" owl-carousel img-slide-carousel owl-theme">
                            <!-- item start -->
                            <div class="item">
                                <div class="col-lg-12">
                                    <div class="img-slide">
                                        <img data-src="{{ getasset('/assets/cover/aboutus/sub1.png') }}" class="img-fluid lazyload" alt="slide" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-12">
                                    <div class="img-slide">
                                        <img data-src="{{ getasset('/assets/cover/aboutus/sub2.png') }}" class="img-fluid lazyload" alt="slide" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-12">
                                    <div class="img-slide">
                                        <img data-src="{{ getasset('/assets/cover/aboutus/sub3.png') }}" class="img-fluid lazyload" alt="slide" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="the-team-section">
            <div class="the-team-inner">
                <div class="container">

                    <!--  row-->

                    <div class="team-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="team-heading">
                                    <h2>
                                        The
                                        <span>Team</span>
                                    </h2>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="content">
                                    <p>Meet our team of accredited industry leaders and tech savvies who spike the growth curves and empower businesses with their exceptional paradigms in this dynamic world of technology.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="the-team-profile">
                        <div class="row">
                            {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-profile">
                            <div class="profile-header">
                                <span>the</span>
                                <h3>Founder</h3>
                            </div>
                            <div class="profile-img">
                                <img src="{{ getasset('/assets/team/ishan.png') }}" alt="">
                            <div class="outlined-box"></div>
                        </div>
                        <div class="profile-footer">
                            <p>Ishan Vyas</p>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-profile">
                        <div class="profile-header">
                            <span>the</span>
                            <h3>Founder</h3>
                        </div>
                        <div class="profile-img">
                            <img src="{{ getasset('/assets/team/karmraj.png') }}" alt="">
                            <div class="outlined-box"></div>
                        </div>
                        <div class="profile-footer">
                            <p>Karmaraj Vaghela</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-profile">
                        <div class="profile-header">
                            <span>the</span>
                            <h3>SALES HEAD</h3>
                        </div>
                        <div class="profile-img">
                            <img src="{{ getasset('/assets/team/harsh.png') }}" alt="">
                            <div class="outlined-box"></div>
                        </div>
                        <div class="profile-footer">
                            <p>Harsh Shah</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team-profile">
                        <div class="profile-header">
                            <span>the</span>
                            <h3>Chief Technologist</h3>
                        </div>
                        <div class="profile-img">
                            <img src="{{ getasset('/assets/team/malkesh.png') }}" alt="">
                            <div class="outlined-box"></div>
                        </div>
                        <div class="profile-footer">
                            <p>Malkesh Sondagar</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- end row -->
</div>
</div>
</section>

<!-- the team section start -->


<section class="scope-of-work-section changetheme" itemprop="articleBody">
    <div class="container-fluid">
        <div class="scope-of-work-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="scope-of-work-heading">
                        <h2><a herf="#" class="heading-link"> Our Core Values </a></h2>
                        <p>Citrusbug has its foundation strong and built on 3 key pillars which are</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="scope-of-work-grid-listing grid_3">
                        <div class="icon">
                            <img data-src="{{ getasset('/storage/uploads/technology_details_icons/white_icon/Micro interaction Copy@2x.svg') }}" loading="lazy" class="lazyload" alt="{{ getasset('/storage/uploads/technology_details_icons/white_icon/Micro interaction Copy@2x.svg') }}">
                        </div>
                        <div class="details">
                            <div class="title">
                                <h4>Integrity</h4>
                            </div>
                            <div class="dec">
                                <p> Being truthful to our customers, employees and partners and adhering to expectations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="scope-of-work-grid-listing grid_3">
                        <div class="icon">
                            <img data-src="{{ getasset('/storage/uploads/technology_details_icons/white_icon/repair copy.png') }}" loading="lazy" class="lazyload" alt="{{ getasset('/storage/uploads/technology_details_icons/white_icon/repair copy.png') }}">
                        </div>
                        <div class="details">
                            <div class="title">
                                <h4>Leadership</h4>
                            </div>
                            <div class="dec">
                                <p> Guiding clients and employees to achieve an enviable journey of growth in technology supremacy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="scope-of-work-grid-listing grid_3">
                        <div class="icon">
                            <img data-src="{{ getasset('/storage/uploads/technology_details_icons/white_icon/deep-learning copy@2x.svg') }}" loading="lazy" class="lazyload" alt="{{ getasset('/storage/uploads/technology_details_icons/white_icon/deep-learning copy@2x.svg') }}">
                        </div>
                        <div class="details">
                            <div class="title">
                                <h4>Innovation</h4>
                            </div>
                            <div class="dec">
                                <p> Constantly in pursuit of possibilities that can re-imagine business for our customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




</div>
</div>
@endsection