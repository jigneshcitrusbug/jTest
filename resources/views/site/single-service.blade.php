@extends('layouts.site.index')

@php

$param = unserialize($service->param);

$tag_line = @$param['tag_line'];
$hire_title = @$param['hire_title'];
$hire_text = @$param['hire_text'];

$projects_title = @$param['projects_title'];
$projects_text = @$param['projects_text'];


$image_main = @$param['image_main'];
$image_cover = @$param['image_cover'];


$seo['title'] = @$seo['title'] ? @$seo['title'] : $service->title ;

$seo['description'] = @$seo['description'] ? @$seo['description'] : $tag_line;

@endphp



@section('seo')
<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ @$seo['title']}}" />
<meta property="og:description" content=" {{ $seo['description'] }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />

<meta name="twitter:title" content="{{ @$seo['title']}}" />
<meta name="twitter:description" content=" {{ $seo['description'] }}" />

<meta name="twitter:image" content="{{ getasset($image_main) }}" />

<title> {{ @$seo['title'] }}</title>
<meta name="description" content=" {{ $seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!getasset($image_main) !!}" />

@endsection

@section('content')



<div class="inner-page">


    <section class="banner-section banner-workdetail-page service-banner team-banner changetheme">
        <!-- <div class="line-1"></div> -->
        @if($image_main)
        <img src="{{ getasset($image_cover) }}" class="banner-img" alt="banner" itemprop="image" />
        @endif
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="content-div">
                            <div class="heading-content heading-workdetail " itemprop="name">
                                <h1 class="view-allprojects">
                                    <a>{{$service->title}}</a>
                                </h1>

                                <p class="tag_line">{{ $tag_line}} </p>
                                <meta itemprop="headline" content="{{ \Str::limit( strip_tags($tag_line) ,100,'...') }}">
                            </div>

                        </div>
                    </div>
                </div>
                {{--
                <div class="row">


                    <span itemprop="author" style="display:none">Citrusbug Technolabs</span>

                    <span itemprop="datePublished" style="display:none">{{$service->created_at}}</span>
                <span itemprop="dateModified" style="display:none">{{$service->updated_at}}</span>

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



<div class="main-middle-area">

    @if($service->description)
    <section class="service-details-section bb" id="service-details">
        <div class="container-fluid">
            <div class="service-details-div">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-div heading-center-div mb-40" itemprop="articleBody">



                            {!! $service->description !!}

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif

    @if($service->servicedetails && $service->servicedetails->count() > 0 )
    <section class="services-box-section services-box-white-section bb">
        <div class="container-fluid">
            <div class="services-box-div align-items-center ">

                @if ($service->servicedetails)
                @foreach ($service->servicedetails as $key=>$item)

                @php

                $param = unserialize($item->param);



                $image_main = @$param['image_main'];

                @endphp


                <div class="services-box-row {{ $key%2 ? 'services-box-row2' : '' }} ">
                    <div class="row">

                        <div class="col-lg-6 col-md-12 col-12 {{ $key%2 ? '' : 'order-2' }} ">
                            <div class="content-div">
                                <div class="heading-div">
                                    <span class="number-span">{{ sprintf('%02d', number_format($key+1))  }}</span>
                                    <h3>{{$item->title}}</h3>
                                    <h2>{{$item->desc}}</h2>
                                    {!!$item->description!!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="services-box-thumb">
                                <img data-src="{{ getasset($image_main) }}" class="img-fluid img-center img-service-box lazyload" alt="service" loading="lazy" />
                                <div class="outlined-box"></div>
                                <div class="rect-fill-box"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif



            </div>
        </div>
    </section>
    @endif

    {!! @$service->content !!}

    <x-package-projects limit="4" :services="$service->id" :servicesObj="$service" template="projectlist" />


    <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />


    <x-package-tech />

    <x-package-testimonial />

    <x-package-article title="Related Articles" :tag="$service->title" />


    <x-package-service />

    @if($service->faqs && $service->faqs->count())
    @include ('site.faqs',['item'=>$service])
    @endif

</div>
</div>
@endsection