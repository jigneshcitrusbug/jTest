@extends('layouts.site.index')


@php
$param = unserialize($career->param);
$seo['description'] =\Str::limit( strip_tags($career->description) ,100,'...');


$seo['title'] = @$seo['title'] ? @$seo['title'] : $career->title. ' Jobs in Ahmedabad';

$seo['description'] = @$seo['description'] ? @$seo['description'] : $tag_line;

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

<meta name="twitter:title" content="{{ $seo['title'] }}" />
<meta name="twitter:description" content="{{ $seo['description'] }}" />

<meta name="twitter:image" content="{{ @$seo['og_image'] }}" />

<title>{{ $seo['title']}}</title>
<meta name="description" content="{{   @$seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{{ @$seo['og_image'] }}" />
@endsection

@section('content')

<div class="inner-page">



    <section class="banner-section banner-workdetail-page service-banner team-banner changetheme  career-banner ">
        <img src="{{ getasset('/assets/cover/aboutus/main.png') }}" class="banner-img" alt="banner" itemprop="image" />
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">



                        <div class="content-div">
                            <div class="heading-content heading-workdetail career-info" itemprop="name">
                                <h1 class="view-allprojects">
                                    <a>{{$career->title}}</a>
                                </h1>

                                <p class="tag_line">{!! $career->description !!} </p>
                                <meta itemprop="headline" content="{{ \Str::limit( strip_tags($career->description) ,100,'...') }}">
                            </div>

                            <div class="banner-content-workdetail">
                                <div class="content-one">
                                    <p><a>{{$career->designation}}</a><a>{{$career->work_type}}</a><a>{{ $param['baseSalary'] }}</a><a>{{$career->position}}
                                            Candidate </a></p>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">


                    </div>

                </div>
            </div>
        </div>
    </section><!--  end of banner  -->


    <div class="main-middle-area" id="main-middle-area">


        <section class="career-details-section bb">
            <div class="container">
                <div class="career-details-div container-lg">

                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="content-div-root">


                                <h2>Opportunity</h2>

                                {!! $career->opportunity !!}

                                <h2>Responsibilities</h2>

                                {!! $param['responsibilities'] !!}

                                <h2>Qualifications</h2>

                                {!! $param['qualifications'] !!}

                                <h2>Skills</h2>

                                {!! $param['skills'] !!}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="career-form pos-rlative">


                                <div class="career-inner">
                                    {!! Form::open(['url' => route('site.career.save'), 'novalidate'=>true , 'id' =>
                                    'career_form','autocomplete'=>'off','files'=>true]) !!}
                                    <input type="text" name="business_name" class="form_business_name" />
                                    <div class="loaderF">
                                        <div class="wrapper">
                                            <div class="pie spinner"></div>
                                            <div class="pie filler"></div>
                                            <div class="mask"></div>
                                        </div>
                                        <!-- <img src="{{ url('assets/loader.gif') }}" class="loader-image" width="100" > -->
                                    </div>

                                    <input type="hidden" name="career_id" value="{{$career->id}}">



                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-heaeding">
                                                    <h3><span> We are always ready to hire talented people.</span></h3>
                                                    <p id="career_error_msg"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="controls-row">
                                                        <input type="text" class="form-control" placeholder="Name*" name="name_21" required data-validation-required-message="Please enter Name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="controls-row">
                                                        <input type="email" class="form-control" placeholder="Email*" name="email" required data-validation-required-message="Please enter Email" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="controls-row">
                                                        <input type="number" class="form-control" placeholder="Phone*" name="phone_21" required data-validation-required-message="Please enter Phone" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <div class="controls-row">
                                                        <input type="file" class="form-control" placeholder="Upload resume" id="resume" name="resume" required data-validation-required-message="Please select Resume" />
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="controls-row">
                                                        <textarea class="form-control" placeholder="Don't forget to tell us more about yourself – something that we won’t find in the resume." id="career_message" name="message" required data-validation-required-message="Please enter message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group ">
                                                    <div class="form-label"> Not A Robot? Please Drag till 50 or above and we will know you are Human!</div>
                                                    <div class="range-wrap">
                                                        <input name="pr_count" ino="3" id="pr_count_3" type="range" min="0" max="100" value="0" class="form-control-range range">
                                                        <output class="bubble" id="pr_count_3_bubble"></output>
                                                    </div>
                                                    <p class="error_rabge_3 hide">Range must be higher than 50</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex-center mt-2">

                                                <div class="btn-case-study button-common-div">


                                                    <button type="submit" class="btn btn-common btn-black" id="career_submit">
                                                        <span class="btn-background"></span>

                                                        <span class="transform-text">Apply Now</span>

                                                        <span class="arrow-right-circle"></span>
                                                    </button>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    {!! Form::close() !!}

                                    <div class="container" id="career_thankyou_message" style="display:noned">
                                        <div class="thank-you-div thankyou_message">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="thank-content-div">
                                                        <h3>Thanks for your Interest!</h3>
                                                        <p>
                                                            Thanks for your Interest. Our associate will be in touch
                                                            with you shortly to discuss further.

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
        </section>

        <x-package-article title="Latest Articles" :tag="$career->title" />




    </div>
</div>
<script>
    var CAREER_URL = "{{ route('site.career.save') }}";
    var CAREER_CSRF = "{{ csrf_token() }}";
</script>
@endsection




@push('scripts')


<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "JobPosting",
        "baseSalary": {
            "@type": "MonetaryAmount",
            "currency": "INR",
            "value": {
                "@type": "QuantitativeValue",
                "value": "{{ $param['baseSalary'] }}",
                "unitText": "MONTH"
            }
        },
        "datePosted": "{{ date('Y-m-d') }}",
        "description": "{!! strip_tags($career->description) !!}",
        "educationRequirements": "{!! strip_tags($param['qualifications']) !!}",
        "employmentType": "{!! $career->work_type !!}",
        "experienceRequirements": "1 - 1.5 year",
        "incentiveCompensation": "Performance-based annual bonus plan, project-completion bonuses",
        "industry": "Computer Software",
        "jobLocation": {
            "@type": "Place",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Ahmedabad",
                "addressRegion": "GJ",
                "postalCode": "380015",
                "streetAddress": "A 411 Shivalik Corporate Park, Above D Mart, Nr, Shyamal Cross Road, Satellite"
            }
        },
        "qualifications": "{!! strip_tags($param['qualifications']) !!}",
        "responsibilities": "{!! strip_tags($param['responsibilities']) !!}",
        "salaryCurrency": "INR",
        "skills": "{!! strip_tags($param['skills']) !!}",
        "specialCommitments": "{!! strip_tags($career->opportunity) !!}",
        "title": "{!! strip_tags($career->title) !!}",
        "workHours": "40 hours per week",
        "hiringOrganization": "Citrusbug",
        "validThrough": "{{ date('Y-m-d', strtotime(date('Y-m-d').'+15 Day')  )}}"
    }
</script>

@endpush