@extends('layouts.site.index')


@php
$title = @$seo['title'] ? @$seo['title'] : "Stories that describe how we helped businesses go digital";
$description = @$seo['description'] ? @$seo['description'] : "What we’ve achieved. Get a glimpse of our success stories
over the years, Partner us for Your Digital Success. See why our customers trust us with their technology needs";
$image = getasset('/assets/cover/work/main.png');
@endphp

@section('seo')

<meta property="og:type" content="website" />
<meta property="fb:pages" content="419783494723913" />
<meta property="og:site_name" content="citrusbugtechnolabs" />
<meta name="distribution" content="global" />
<meta name="p:domain_verify" content="3db7abcd0cfb87268138e2f5bc51c9f3" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />
<meta property="og:url" content="{{ @$seo['url'] }}" />
<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:site" content="@citrusbug" />
<meta name="twitter:creator" content="@citrusbug" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $description }}" />
<meta name="twitter:image" content="{{ $image }}" />
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{{ $image }}" />
@endsection

@section('content')

<div class="inner-page">

    @component('layouts.site.shared.banners', ['banner' => @$banner])

    @slot('images')
    <div class="slide slide1 " data-slide="we" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/work/main.png') }}')">

        </div>
    </div>
    <div class="slide slide2 " data-slide="developement" data-slide-type="image">
        <div class="slide_inner lazy_bg" style="background-image:url('{{ getasset('/assets/cover/work/main2.png') }}')">

        </div>
    </div>
    {{-- <div class="slide slide3 " data-slide="partner" data-slide-type="video">
            <div class="slide_inner"  >
                <video src="{{ getasset('/assets/images/partner.mp4') }}" autoplay preload loop >
    <source src="{{ getasset('/assets/images/partner.mp4') }}" type="video/mp4">
    </video>
</div>
</div> --}}
@endslot
@slot('description')
<span id="slide-we" data-slide="we" data-slide-theme="dark" class="span-block main_slide">Stories that describe how
    we</span>
<span class="span-block bold-line main_slide" data-slide="developement" data-slide-theme="dark">
    <a>helped</a>
    <a>small and medium</a></span>
<span class="span-block main_slide" data-slide="we" data-slide-theme="dark">businesses go digital</span>
@endslot

@slot('desc')
<p>See why our customers trust us with their technology needs</p>
@endslot

@slot('nextsection')
main-middle-area
@endslot


@endcomponent


<div class="main-middle-area" id="main-middle-area">
    <section class="project-view-section gray_bg" id="case-study-section">
        <div class="container-fluid">
            <div class="project-view-div">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-section">
                            {!! getSession('site_work_title', '') !!}
                            <p>{!! getSession('site_work_description', '') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="all-workslider">
                    <div class="work-tabs">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="all" href="#all" class="active"><span>All</span></a></li>
                            @foreach($technologies as $key=>$item)
                            <li><a data-toggle="{{$item->slug}}" href="#{{$item->slug}}"><span>{{$item->title}}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="grid row ">
                        <div class="grid-sizer col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4  accent-body"></div>
                        @foreach ($works as $work)
                        @php
                        $param = unserialize($work->param);
                        $project_work_height = @$param['project_work_height'];
                        $tech = $work->technologies->pluck('slug');
                        $tclass = "";
                        foreach($tech as $t){
                        $tclass .= " ".$t;
                        }
                        $image_main = @$param['image_main'];
                        $image = @$param['image_thumb_1'];
                        if($project_work_height){
                        $image = @$param['image_thumb_2'];
                        }

                        @endphp
                        <div class="grid-item col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4  height_{{ $project_work_height}}   all {{ $tclass }} ">
                            <a href="{{route('site.work',['slug'=>$work->slug])}}">
                                <figure class="single-item all-wrok-img">

                                    @if(isset($work) && $image)
                                    <img alt="{{ $work->title}}" src="{{getasset(@$image)}}" />
                                    @endif
                                    <figcaption>
                                        <h2>{{ $work->title}}</h2>
                                        <p> {{ \Str::limit( strip_tags($work->desc) ,80,'...')  }} </p>



                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <x-package-partner hiretitle="" developer="Dedicated" template="partner2" />

    {{-- <x-package-tech   /> --}}

    <x-package-testimonial />


    {{-- <x-package-service   />  --}}




</div>
</div>



@endsection


@push('scripts')


{{-- <script>
     
    function execurteWorkScript() {
    
   
}

if (window.addEventListener){
    window.addEventListener("load", execurteWorkScript, false);
}else if (window.attachEvent){
    window.attachEvent("onload", execurteWorkScript);
}else{
    window.onload = execurteWorkScript;
}
 
</script> --}}


@endpush