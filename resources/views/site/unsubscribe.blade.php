@extends('layouts.site.index')

@php

$title = @$seo['title'] ? @$seo['title'] : '';
$tag_line = @$seo['description'] ? @$seo['description'] : '';


@endphp

@push('css')
<style>
    #unsubscribe label {
        float: left;
    }
</style>
@endpush


@section('seo')
<meta property="og:type" content="{{ @$seo['og_type'] }}" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ $title}}" />
<meta property="og:description" content="{{ $tag_line }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />
<meta name="twitter:title" content="{{ $title}}" />
<meta name="twitter:description" content="{{ $tag_line }}" />
<meta name="twitter:image" content="{{ @$seo['image'] }}" />
<title>{{ $title}}</title>
<meta name="description" content="{{ $tag_line }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{{ @$seo['image'] }}" />
@endsection

@section('content')
<div class="inner-page">
    <div class="main-middle-area">
        <section class="service-details-section" id="unsubscribe">
            <div class="container-fluid">
                <div class="service-details-div">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="heading-div heading-center-div ">

                                <div class="project-form">
                                    <div class="project-inner">
                                        {!! Form::open(['url' => route('site.unsubscribe.save'), 'novalidate'=>true ,
                                        'id' => 'unsubscribe_form','autocomplete'=>'off','files'=>true]) !!}

                                        <div class="loaderF">
                                            <div class="wrapper">
                                                <div class="pie spinner"></div>
                                                <div class="pie filler"></div>
                                                <div class="mask"></div>
                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2>
                                                        UNSUBSCRIBE
                                                    </h2>
                                                    <p>
                                                        We are always here to help out whatever way we can ☺
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-heaeding">
                                                        <h3><span> Tell us about why you want to unsubscribe? </span>
                                                        </h3>
                                                        <p id="unsubscribe_error_msg"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="Name" name="name" required data-validation-required-message="Please enter Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Email*</label>
                                                            <input type="email" class="form-control" placeholder="Email*" name="email" required data-validation-required-message="Please enter Email" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Reason to unsubscribe</label>
                                                        <div class="controls">
                                                            <textarea class="form-control" placeholder="Your message" name="message"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex-center">
                                                    <input type="submit" class="btn btn-submit" id="submit" value="Submit" />
                                                </div>
                                            </div>
                                        </div>

                                        {!! Form::close() !!}




                                        <div class="container" id="unsubscribe_thankyou_message">
                                            <div class="thank-you-div thankyou_message">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        {{-- <div class="img-thanks">
                                                            <img src="{{ getasset('/assets/images/thankyou.svg')}}"
                                                        alt="thankyou" class="thanks-you" />
                                                    </div> --}}
                                                    <div class="thank-content-div">

                                                        <h2>YOU WILL BE MISSED!</h2>

                                                        <p>
                                                            You have been successfully unsubscribed from the CITRUSBUG
                                                            email list.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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



@push('scripts')

<script>
    function execurteUnsubscribeScript() {


    }

    if (window.addEventListener) {
        window.addEventListener("load", execurteUnsubscribeScript, false);
    } else if (window.attachEvent) {
        window.attachEvent("onload", execurteUnsubscribeScript);
    } else {
        window.onload = execurteUnsubscribeScript;
    }
</script>
@endpush