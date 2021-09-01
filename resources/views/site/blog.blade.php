@extends('layouts.site.index')


@php
$title = @$seo['title'] ? @$seo['title'] : "Interesting articles and blog posts on latest Technology trends.";
$description = @$seo['description'] ? @$seo['description'] : "Our inspiring articles about interesting IT topics. Explore the Latest Technology Trends around the Globe and enhance your knowledge with opinions of our industry experts.";
$image = getasset('/assets/cover/blog/main.jpg');
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
        <img data-src="{{ getasset('/assets/cover/blog/main.jpg') }}" class="banner-img lazyload" alt="banner" />

        <div class="banner-div">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">


                        <div class="content-div">
                            <div class="heading-content heading-workdetail ">
                                <div class="view-allprojects">
                                    <a href="">Blog</a>
                                </div>

                                <h1>Our inspiring articles about interesting IT topics.</h1>

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


    <div class="main-middle-area" id="main-middle-area">

        <section class="bloglist-section">
            <div class="container">
                <div class="bloglist-inner">
                    <div class="row">

                        <!-- heading -->
                        <div class="col-lg-12">
                            <div class="blog-heading">
                                <h2>
                                    Good Reads For All | Explore the Latest Trends around the Globe.</h2>
                            </div>
                        </div>
                        <!-- end heading -->

                        <!-- blog listing -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="blog-lisiting-all ">
                                <div class="row">

                                    @foreach ($articles as $item)
                                    @php
                                    $param = unserialize($item->param);
                                    $image_main = @$param['image_main'];
                                    $display_date = @$param['display_date'];
                                    @endphp

                                    <!-- blog-item -->
                                    <div class="col-lg-4  col-md-4 col-sm-6 col-border">
                                        <div class="blog-item">
                                            <div class="blog-body">
                                                <a href="{{ route('site.article',['slug'=>$item->slug])}}">
                                                    <img data-src="{{getasset($image_main)}}" class="img-fluid lazyload" alt="{{ $item->title }}" loading="lazy" />
                                                </a>
                                            </div>

                                            <div class="blog-footer">

                                                <a href="{{ route('site.article',['slug'=>$item->slug])}}">

                                                    <h3>{{ $item->title }}</h3>

                                                    <span>{{ date('F, Y', strtotime($display_date) ) }} </span>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog-item -->
                                    @endforeach






                                </div>
                            </div>
                        </div>
                        <!-- end blog listing -->

                        {{-- <!-- pagination -->
                    <div class="col-lg-12">
                        <div class="pagination-div">
                            <ul class="pagination">
                              <li class="page-item prev disabled">
                                <a class="page-link" href="#" tabindex="-1"><img src="assets/images/icons/arrow-prev.png" alt=""></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">4</a></li>
                              <li class="page-item next ">
                                <a class="page-link" href="#"><img src="assets/images/icons/arrow-next.png" alt=""></a>
                              </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pagination --> --}}

                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="blog-listing-section">
        <div class="container">
            <div class="blog-listing-inner">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog-category">
                            <h2>
                                Good Reads For All | Explore the Latest Trends around the Globe.</h2>
 
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="blog-lisiting-all blog-lisiting">
                            <div class="row">

                                @foreach ($articles as $item)
                                @php
                                    $param = unserialize($item->param);
                                    $image_main = @$param['image_main'];
                                    $display_date = @$param['display_date'];
                                @endphp
                                <!-- blog-item -->
                                 <!-- blog-item -->
                                 <div class="col-lg-4  col-md-4 col-sm-6 col-border">
                                    <div class="blog-item">
                                        <div class="blog-body">
                                            <a href="{{ route('site.article',['slug'=>$item->slug])}}">
        <img data-src="{{getasset($image_main)}}" class="img-fluid lazyload" alt="{{ $item->title }}" loading="lazy" />
        </a>
    </div>

    <div class="blog-footer">
        <a href="{{ route('site.article',['slug'=>$item->slug])}}">

            <h3>{{ $item->title }}</h3>

            <span>{{ date('F, Y', strtotime($display_date) ) }} </span>

        </a>
    </div>
</div>
</div>
<!-- blog-item -->

@endforeach

</div>

</div>
</div>
</div>
</div>

</section> --}}


<x-package-partner hiretitle="" developer="Dedicated" template="partner2" />



<x-package-tech />

<x-package-service />

</div>



@endsection


@push('scripts')
@endpush