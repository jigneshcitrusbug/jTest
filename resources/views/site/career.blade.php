@extends('layouts.site.index')



@php
$title = @$seo['title'] ? @$seo['title'] : "Join Our Team at Citrusbug Technolabs";
$description = @$seo['description'] ? @$seo['description'] : "At Citrusbug Technolabs, the world’s most talented engineers, designers, and thought leaders are shaping the future of online publishing.";

$image = @$seo['og_image'] ? @$seo['og_image'] : getasset('/assets/cover/aboutus/main2.png');
$timage = @$seo['og_twitter_image'] ? @$seo['og_twitter_image'] : getasset('/assets/cover/work/main.png');

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
        <!-- <div class="line-1"></div> -->
        <img data-src="{{ getasset('/assets/cover/aboutus/main2.png') }}" class="banner-img lazyload" alt="banner" />
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">



                        <div class="content-div">
                            <div class="heading-content heading-workdetail ">
                                <div class="view-allprojects">
                                    <a href="">CAREERS</a>
                                </div>

                                <h1>Join Our Team</h1>

                                <p>
                                    At Citrusbug Technolabs, the world’s most talented engineers, designers, and thought
                                    leaders are shaping the future of online publishing.
                                </p>

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
    </section>



    <div class="main-middle-area">

        <section class="career-link-section">
            <div class="container">
                <div class="career-link-div">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-div heading-center-div mb-40">
                                <h2>Open Positions</h2>
                                <p>
                                    We’re looking for people to join the team who are as excited as we are to help build
                                    the platform that empowers the future generation of creators to be successful
                                    online.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="row">


                        @if(count($careers) > 0)
                        @foreach($careers as $key => $career)

                        @php
                        $param = unserialize($career->param);

                        @endphp

                        <div class="col-lg-4 col-md-12 col-sm-12 d-flex align-items-stretch">
                            <div class="card">
                                <div class="card-body">



                                    <h2 class="card-title">
                                        <a href="{{route('site.career',['slug'=>$career->slug])}}" class="careers-div">
                                            {{$career->title}}
                                        </a>
                                    </h2>

                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$career->designation}}</li>


                                    <li class="list-group-item">{{$career->work_type}}</li>
                                    <li class="list-group-item">{{ $param['baseSalary'] }}</li>
                                    <li class="list-group-item">{{$career->position}} Candidate </li>

                                    <li class="list-group-item"><a href="{{route('site.career',['slug'=>$career->slug])}}" class="btn btn-apply">Apply now</a></li>
                                </ul>






                            </div>

                        </div>
                        @endforeach
                        @endif


                    </div>
                </div>

            </div>
    </div>
    </section>

    <section class="interview-section changetheme">
        <div class="container-fluid">
            <div class="interview-div align-items-center">

                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="content-div">
                            <div class="heading-div">


                                <h3> What is it like to work at <span class="line link7"> Citrusbug. </span> </h3>

                                <p> We are always on the lookout for people can take up challenges

                                    of our customers and address it with technology</p>

                                <div class="button-common-div">
                                    <a href="{{ route('site.works') }}" class="btn btn-common btn-white">
                                        <span class="btn-background"></span>


                                        <span class="transform-text">View case study</span>
                                        <span class="arrow-right-circle"></span>
                                    </a>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="interview-thumb">
                            <img data-src="{{getasset('/assets/images/interview.png')}}" class="img-fluid img-center lazyload" alt="View case study" loading="lazy" />
                            <div class="outlined-box"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="careers-list-section bb">
        <div class="container">
            <div class="careers-list-div">

                <div class="row">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="ul-list-custom-div">
                            <div class="heading-div">
                                <h2> <span class="number-span">01</span> Technology First</h2>
                            </div>
                            <div class="ul-list-div d-block">
                                <ul class="ul-list-custom">
                                    <li>We are more passionate about technology than anything else</li>
                                    <li>Continuous upskilling programs to stay relevant with industry needs </li>
                                    <li>Work in challenging customer projects </li>
                                    <li>Guided by technology veterans </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="ul-list-custom-div">
                            <div class="heading-div">
                                <h2> <span class="number-span">02</span> Growth</h2>
                            </div>
                            <div class="ul-list-div d-block">
                                <ul class="ul-list-custom">
                                    <li>Expand your skills </li>
                                    <li>Certifications and Learning programs tailored for your roles</li>
                                    <li>Well defined career paths</li>
                                    <li>Lead customer management initiatives </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ul-list-custom-div">
                            <div class="heading-div">
                                <h2> <span class="number-span">03</span> Rewards & Benefits</h2>
                            </div>
                            <div class="ul-list-div d-block">
                                <ul class="ul-list-custom">
                                    <li>Remuneration on par with best in the industry</li>
                                    <li>Long term loyalty bonuses </li>
                                    <li>Regular Appraisals based on performances</li>
                                    <li>A team that celebrates every achievement</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="ul-list-custom-div">
                            <div class="heading-div">
                                <h2> <span class="number-span">04</span> Culture</h2>
                            </div>
                            <div class="ul-list-div d-block">
                                <ul class="ul-list-custom">
                                    <li>Transparent and Open Leadership </li>
                                    <li>Agile working style with direct customer interactions</li>
                                    <li>Freedom to explore techno-functional roles</li>
                                    <li>Flexibilityin time and location for healthy work-life balance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <x-package-article title="Latest Articles" />


</div>
</div>
@endsection