@extends('layouts.site.index')

@php

$sows = explode("\n",@$article->sow);
$sowlist = array_chunk($sows , (int)(count($sows)/2)+1 );

$param = unserialize(@$article->param);

$project_type = @$param['project_type'];
$image_main = @$param['image_main'] ? @$param['image_main'] : getasset('/assets/cover/contact/main.jpg');
$display_date = @$param['display_date'];

$seo['title'] = @$seo['title'] ? @$seo['title'] : 'Have a Business Idea? Let\'s transform it into the
reality !';

$seo['description'] = @$seo['description'] ? @$seo['description'] : 'Different businesses have different requirements. That’s why we connect our clients with the right set of people and technologies that assure quality work with timely completion. Provide your details and we\'ll connect with you as swiftly as possible.';

@endphp

@section('seo')
<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ $seo['title']}}" />
<meta property="og:description" content="{{ $seo['description'] }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />

<meta name="twitter:title" content="{{ @$seo['title']}}" />
<meta name="twitter:description" content="{{ @$seo['description'] }}" />

<meta name="twitter:image" content="{!!  @$image_main  !!}" />

<title>{{ @$seo['title'] }} Contact Us - Citrusbug Technolabs</title>
<meta name="description" content="{{ $seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!  @$image_main  !!}" />



@endsection




@section('content')

<div class="inner-page">


    <section class="banner-section banner-workdetail-page team-banner changetheme">
        <!-- <div class="line-1"></div> -->
        <img data-src="{{ getasset('/assets/cover/contact/main.jpg') }}" class="banner-img lazyload" alt="banner" />
        <div class="banner-div">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">



                        <div class="content-div">
                            <div class="heading-content heading-workdetail ">
                                <div class="view-allprojects">
                                    <a>CONTACT US</a>
                                </div>

                                <h1>Have a Business Idea? Let's transform it into the reality !</h1>

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


    {{-- <section class="banner-section banner-workdetail-page banner-contact-us">
        <!-- <div class="line-1"></div> -->
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">        
                        <img src="assets/images/banner1.jpg" class="banner-img" alt="banner" />
                        <div class="content-div">
                            <div class="heading-content heading-workdetail">
                                <div class="view-allprojects">
                                    <a href="#!">CONTACT US</a>
                                </div>
                                <h1>We are growing, and we are looking for skilled individuals to grow with us.</h1>
                            </div>
                           
                        </div>
                    </div>
                    </div>
                    <div class="row"> 
                    <div class="col-lg-5">
                        
                        <div class="banner-content-workdetail">
                    
                            
                        </div>
                    </div> 
                    <div class="col-lg-7">
                        <div class="banner-img-right">
                            <!-- <div class="banner-work-img">
                                <img src="assets/images/iMac-technology-banner.png" alt="">
                            </div> -->
                        </div>
                        
                    </div>
                </div>        
            </div>
        </div>
    </section><!--  end of banner  --> --}}



    <div class="main-middle-area" id="main-middle-area">

        <section class="conatct-form-section">
            <div class="conatct-form-inner">
                <div class="container">

                    <!--  row-->

                    <div class="contact-heading">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="heading">
                                    <h2>
                                        Say
                                        <span>Hello?</span>
                                    </h2>
                                </div>
                            </div>

                            <div class="col-lg-9 col-md-8">
                                <div class="content">
                                    <p>
                                        Different businesses have different requirements. That’s why we connect our
                                        clients with the
                                        right set of people and technologies that assure quality work with timely
                                        completion. Provide your details and we'll connect with you as swiftly as
                                        possible.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>





                    @include('layouts.site.shared.contactform')




                    <!-- end row -->
                </div>
            </div>
        </section>


        <section class="headquarter-section">
            <div class="conatct-middle-inner">
                <img data-src="{{ getSession('site_about_baner_image',  getasset('/assets/images/about-us.png') ) }}" alt="img-banner" class="img-fluid img-full lazyload" loading="lazy" />
            </div>
            <div class="headquarter-innner">
                <div class="container">
                    <div class="row row-0">
                        <div class="col-lg-6 col-md-6 pad-0">
                            <div class="headquarter-box">
                                <div class="headquarter-icon india">
                                    {{-- <img src="{{ getasset('/assets/images/headquarter.svg')}}" alt=""> --}}
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9" />
                                            <!-- <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"/> -->
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2" />
                                        </g>
                                        <g id="hour">
                                            <path class="hour-arm" d="M300.5 298V142" />
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9" />
                                        </g>
                                        <g id="minute">
                                            <path class="minute-arm" d="M300.5 298V67" />
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9" />
                                        </g>
                                        <!-- <g id="second">
                                            <path class="second-arm" d="M300.5 350V55"/>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"/>
                                        </g> -->
                                    </svg>
                                </div>
                                <div class="headquarter-info">
                                    <h3><span class="line">India</span> <span class="line">Headquarter</span></h3>
                                    <p>A 411, Shivalik Corporate Park, Above D Mart, Satellite, Ahmedabad - 380015</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 pad-0">
                            <div class="headquarter-box">
                                <div class="headquarter-icon us">
                                    {{-- <img src="{{ getasset('/assets/images/headquarter.svg')}}" alt=""> --}}
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9" />
                                            <!-- <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"/> -->
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2" />
                                        </g>
                                        <g id="hour">
                                            <path class="hour-arm" d="M300.5 298V142" />
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9" />
                                        </g>
                                        <g id="minute">
                                            <path class="minute-arm" d="M300.5 298V67" />
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9" />
                                        </g>
                                        <!-- <g id="second">
                                            <path class="second-arm" d="M300.5 350V55"/>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"/>
                                        </g> -->
                                    </svg>
                                </div>
                                <div class="headquarter-info">
                                    <h3>United States Branch</h3>
                                    <p>900 N Arlington Heights Rd Itasca, Chicago, Illinois 60143</p>
                                </div>
                            </div>
                        </div>

                        {{--
                        <div class="col-lg-4 col-md-4 pad-0">
                            <div class="headquarter-box">
                                <div class="headquarter-icon canada">
                                    
                                    <svg id="clock" xmlns="http://www.w3.org/2000/svg" width="114" height="114" viewBox="0 0 600 600">
                                        <g id="face">
                                            <circle class="circle" cx="300" cy="300" r="253.9"/>
                                            <!-- <path class="hour-marks" d="M300.5 94V61M506 300.5h32M300.5 506v33M94 300.5H60M411.3 107.8l7.9-13.8M493 190.2l13-7.4M492.1 411.4l16.5 9.5M411 492.3l8.9 15.3M189 492.3l-9.2 15.9M107.7 411L93 419.5M107.5 189.3l-17.1-9.9M188.1 108.2l-9-15.6"/> -->
                                            <circle class="mid-circle" cx="300" cy="300" r="16.2"/>
                                        </g>
                                        <g id="hour">
                                            <path class="hour-arm" d="M300.5 298V142"/>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"/>
                                        </g>
                                        <g id="minute">
                                            <path class="minute-arm" d="M300.5 298V67"/>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"/>
                                        </g>
                                        <!-- <g id="second">
                                            <path class="second-arm" d="M300.5 350V55"/>
                                            <circle class="sizing-box" cx="300" cy="300" r="253.9"/>
                                        </g> -->
                                    </svg>
                                </div>
                                <div class="headquarter-info">
                                    <h3>Canada Branch</h3>
                                    <p>71, Maddybeth crescent, Brampton, Ontario L6Y 5R6</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <div class="map-section">
            <div class="map-section-inner">
                <div class="container-fluid">
                    <div class="map-pin">
                        <img src="{{ getasset('assets/images/pin.svg')}}" alt="">
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.115810738536!2d72.52699051428239!3d23.019519622220255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f79b8e0c4f%3A0xbd76eb8cd7a5b1a4!2sCitrusbug%20Technolabs!5e0!3m2!1sen!2sin!4v1597407716446!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

    </div>



</div>
</div>


{{-- <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://citrusbug.com/article/the-top-javascript-frameworks-to-use"
      },
      "headline": "{{ @$article->title}}",
"description": "{{ @$article->desc}}",
"image": {
"@type": "ImageObject",
"url": "{!!getasset($image_main) !!}",
"width": "720",
"height": "340"
},
"author": {
"@type": "Person",
"name": "Ishan Vyas"
},
"publisher": {
"@type": "Organization",
"name": "Citrusbug Technolabs",
"logo": {
"@type": "ImageObject",
"url": "https://citrusbug.com/assets/images/site_logo.png",
"width": "600",
"height": "60"
}
},
"datePublished": "{{$display_date}}",
"dateModified": "{{@$article->updated_at}}"
}
</script> --}}






@endsection


@push('scripts')


<script>
    /*

function run_canada_clock(){
  
  
  var date = new Date(new Date().toLocaleString("en-US",{timeZone:'Canada/Central'}));
    
  console.log('canada time' + date);
  
  let hr = date.getHours();
  let min = date.getMinutes();
  let sec = date.getSeconds();

  let hrPosition = hr*360/12 + ((min * 360/60)/12) ;
  let minPosition = (min * 360/60) + (sec* 360/60)/60;
  let secPosition = sec * 360/60;

  $(".canada #hour").css('transform',"rotate(" + hrPosition + "deg)");  
  $(".canada #minute").css('transform',"rotate(" + minPosition + "deg)");
}

run_canada_clock();

setInterval(run_canada_clock, 1000);

*/
</script>

@endpush