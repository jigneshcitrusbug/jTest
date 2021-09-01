@extends('layouts.site.index')

@push('cssv2')
<link rel="stylesheet" href="{{ getasset('/assets/css/responce-page.css')}}" media="all" type="text/css" />
@endpush

@section('content')


<div id="wrapper" class="wrapper page-not-found-wrapper">

    <section class="page-not-found-section not-found-404-section">

        <div class="page-not-found-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="found-content-div">
                            <!--<div class="page-not-thumb"><img src="{{ asset('assets/images/404.svg') }}" alt="404" class="page-not-img"></div>-->
                            <div class="page-not-content">
                                <h3>Oops! We can't seem to find the page you're looking for.</h3>
                                <div class="content-max-width">
                                    <p>The page you were looking for doesn't exist. Try the links below to start your experience again.</p>
                                </div>
                                <!-- <div class="button-common-div w100 mt-50">
                                    <a href="{{ url('/') }}" class="btn btn-common btn-red"> <span class="transform-text">Go to home</span> <span class="arrow-right-circle"></span> </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="link-found-section ">
        <div class="link-found-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="link-found-content-div">
                            <div class="title-div">
                                <h5>You may find one of the following links useful:</h5>
                            </div>
                            <div class="link-list-view-div">
                                <ul>
                                    <li> <a href="{{ url('') }}">Home</a> </li>
                                    <li> <a href="{{ url('technology/python-development') }}">Hire Python Developers</a> </li>
                                    <li> <a href="{{ url('technology/react-js-development') }}">Hire ReactJS Developers</a> </li>
                                    <li> <a href="{{ url('technology/angular-development') }}">Hire AngularJS Developers</a> </li>
                                    <li> <a href="{{ url('technology/vue-development') }}">Hire VueJS Developers</a> </li>
                                    <li> <a href="{{ url('technology/php-development') }}">Hire PHP Developers</a> </li>
                                    <li> <a href="{{ url('technology/ml-ai') }}">Machine and Artificial Intelligence</a> </li>
                                    <li> <a href="{{ url('technology/cloud-devops') }}">Cloud and Devops Services</a> </li>
                                    <li> <a href="{{ url('services/web-application-development') }}">Web Application Development</a> </li>
                                    <li> <a href="{{ url('services/custom-software-development') }}">Custom Software Development</a> </li>
                                    <li> <a href="{{ url('services/mobile-app-development') }}">Mobile App Development</a> </li>
                                    <li> <a href="{{ url('services/dedicated-digital-teams') }}">Dedicated Development Team</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-not-found-section thankyou-page-section d-none">

        <div class="page-not-found-div thankyou-page-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="found-content-div">
                            <div class="thankyou-thumb">
                                <img src="{{ asset('assets/images/thankyou-black.svg') }}" alt="thankyou" class="img-fluid thankyou-img">
                            </div>
                            <div class="page-not-content thankyou-content">
                                <h3>Thanks for your Interest!</h3>
                                <div class="content-max-width">
                                    <p> Thanks for your Interest. Our associate will be in touch with you shortly to discuss further. </p>
                                </div>
                                <div class="button-common-div w100 mt-50">
                                    <a href="{{ url('/') }}" class="btn btn-common btn-red"> <span class="transform-text">Go to home</span> <span class="arrow-right-circle"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection