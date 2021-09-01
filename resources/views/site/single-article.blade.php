@extends('layouts.site.index')

@php

$sows = explode("\n",$article->sow);
$sowlist = array_chunk($sows , (int)(count($sows)/2)+1 );

$param = unserialize($article->param);

$project_type = @$param['project_type'];
$image_main = @$param['image_main'];
$display_date = @$param['display_date'];

$seo['title'] = @$seo['title'] ? @$seo['title'] : $article->title;

$seo['description'] = @$seo['description'] ? @$seo['description'] : $article->desc;

@endphp

@section('seo')
<meta property="og:type" content="article" />
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
<title>{{ @$seo['title'] }} - Blog</title>
<meta name="description" content="{{ $seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!getasset($image_main) !!}" />

@endsection

@section('content')

<div class="inner-page">


    <section class="banner-section banner-workdetail-page changetheme">
        <!-- <div class="line-1"></div> -->
        <img src="{!!getasset($image_main) !!}" class="banner-img article-cover lazyload" alt="{{ $article->title}}" />
        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="content-div">
                            <div class="heading-content heading-workdetail heading-blog">
                                <div class="view-allprojects">
                                    <a href="{{route('site.blog')}}">View all Blogs</a>
                                </div>

                                <h1>{{ $article->title}}</h1>
                                <p>
                                    {{ $article->desc}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <span style="display:none">Citrusbug Technolabs</span>

                <span style="display:none">{{$display_date}}</span>
                <span style="display:none">{{$article->updated_at}}</span>

                <div itemscope itemtype="http://schema.org/Organization" style="display:none">
                    <span>http</span>
                    <span>Citrusbug Technolabs</span>




                    <div itemscope itemtype="http://schema.org/ImageObject">
                        <!-- <meta content="{{url('/')}}"> -->
                        <h2>Citrusbug Technolabs</h2>
                        <img src="{{ url(getasset('/assets/images/logo.svg')) }}" alt="Citrusbug Technolabs" class="lazyload" />
                        <span>Citrusbug Technolabs</span>

                    </div>

                </div>
                <!-- <meta content="{{ @$seo['url'] }}"> -->

                {{-- <div class="row">
                    <div class="col-lg-5">

                        <div class="banner-content-workdetail">
                             
                            <div class="content-two">
                                <p><a href="#"> View Description </a></p>
                                <div class="arrrow-div">
                                    <a href="#"><img data-src="{{getasset('/assets/images/icons/arrow-verticle-line.png')}}"
                loading="lazy"
                class="arrow-lines arrow-horizontal-lines lazyload" alt="arrow"></a>
            </div>
        </div>

</div>
</div>
<div class="col-lg-7">





</div>
</div> --}}

<div class="row">
    <div class="col-12">
        <div class="blog-post-info d-block d-sm-none px-4">
            <ul class="d-inline " style="color:red">
                {{--<li><a >{{ @$article->categories->name }}</a></li> --}}
                <li class="d-inline"><a>{{ date('d F, Y', strtotime($display_date) ) }}</a></li>
                <li class="d-inline"><a>Read time {{ @$param['read_time'] }}</a></li>
                <li class="d-inline"><a>{{ @$article->views }} Views</a></li>
                <li class="d-inline"><a>by Ishan Vyas</a></li>
            </ul>
        </div>
    </div>
</div>

</div>
</div>
</section><!--  end of banner  -->


<div class="main-middle-area" id="main-middle-area">



    <section class="blog-detail-section">
        <div class="blog-detail-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 border-verticle">


                        <div class="back-to-article pt-4">
                            <a href="{{ route('site.blog') }}"><span><img src="{{getasset('/assets/images/icons/left-arrow.png')}}" loading="lazy" class="lazyload" alt=""></span>Blog</a>
                        </div>


                        <!-- title -->
                        {{-- <div class="blog-subtitle">
                                <h2>{{ $article->desc}}</h2>
                    </div> --}}

                    <!-- post info owner-->
                    <div class="blog-post-info d-none d-sm-block">
                        <ul>
                            {{--<li><a>{{ @$article->categories->name }}</a></li> --}}
                            <li><a>{{ date('d F, Y', strtotime($display_date) ) }}</a></li>
                            <li><a>Read time {{ @$param['read_time'] }}</a></li>
                            <li><a>{{ @$article->views }} Views</a></li>
                            <li><a>by Ishan Vyas</a></li>
                        </ul>
                    </div>

                    <!-- blog detial -->

                    <div class="blog-detail-info">

                        {!! $article->description !!}


                    </div>

                    <div class="blog-footer">
                        <div class="row">
                            <div class="col-lg-6">

                            </div>
                            <div class="col-lg-6">

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
</div>



<!-- blog author section start -->
<section class="blog-author-section nh nptb">
    <div class="blog-author-inner">
        <div class="container">

            <!-- blog row-->

            <div class="row">

                <!-- author 1 -->
                <div class="col-lg-12">
                    <div class="bolg-autor">
                        <div class="profile-item">
                            <div class="author-profile">
                                <img src="{{ getasset('/assets/team/ishan.png') }}" alt="Ishan Vyas">
                            </div>
                            <div class="profile-content">
                                <div class="content-top">
                                    <h3>Ishan Vyas</h3>
                                    {{-- <p>Ishan is a Chief Technology Officer at Citrusbug Technolabs having more than a decade of exposure in IT industry. Prior to Citrusbug, he worked as Project Manager after starting his career as a Full-stack developer. --}}
                                    <p>
                                        Ishan is a Project Manager at Citrusbug Technolabs having more than a decade of
                                        exposure in IT industry.
                                    </p>
                                    <p>
                                        Developed over hundred web and mobile applications, he is helping businesses to
                                        achieve their technology milestones.
                                    </p>
                                    </p>
                                </div>
                                <div class="content-footer">
                                    <ul class="social-media">
                                        <li>
                                            <a href="https://www.linkedin.com/in/ishan-vyas" rel="nofollow" target="_blank" class=""><img src="{{getasset('/assets/images/linkedin.svg')}}" alt=""></a>
                                        </li>

                                        <li>
                                            <a href="https://www.behance.net/CitrusbugTechnolabs" rel="nofollow" target="_blank" class=""><img src="{{getasset('/assets/images/behance.svg')}}" alt=""></a>
                                        </li>

                                        <li>
                                            <a href="https://www.facebook.com/citrusbugtechnolabs/" rel="nofollow" target="_blank" class=""><img src="{{getasset('/assets/images/facebook.svg')}}" alt=""></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end author 1 -->



            </div>

            <!-- end row -->
        </div>
    </div>
</section>

<!-- blog author section start -->




<x-package-article title="Related Articles" :tag="$article->title" />


<x-package-partner hiretitle="" developer="Dedicated" template="partner2" />

<x-package-tech />

<x-package-service />




</div>
</div>


<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://citrusbug.com/article/the-top-javascript-frameworks-to-use"
        },
        "headline": "{{ $article->title}}",
        "description": "{{ $article->desc}}",
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
        "dateModified": "{{$article->updated_at}}"
    }
</script>



@endsection