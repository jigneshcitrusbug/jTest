@extends('layouts.site.index')

@php

$sows = explode("\n",@$article->sow);
$sowlist = array_chunk($sows , (int)(count($sows)/2)+1 );

$param = unserialize(@$article->param);

$project_type = @$param['project_type'];
$image_main = @$param['image_main'];
$display_date = @$param['display_date'];

$seo['title'] = @$seo['title'] ? @$seo['title'] : @$article->title;

$seo['description'] = @$seo['description'] ? @$seo['description'] : 'We are growing, and we are looking for skilled individuals to grow with us.';

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
<title>{{ @$seo['title'] }} Sitemap - Citrusbug Technolabs</title>
<meta name="description" content="{{ $seo['description'] }}">
<meta name="author" content="Citrusbug Technolabs">
<meta property="og:image" content="{!!  @$image_main  !!}" />
@endsection

@section('content')

<div class="inner-page">
    <div class="main-middle-area" id="main-middle-area">

        <section class="sitemap-section">
            <div class="sitemap-inner">
                <div class="container-fluid">




                    <div class="grid row">

                        <div class="grid-sizer  accent-body"></div>

                        <div class="grid-item col-lg-4 col-12 col-md-6 col-xl-4">

                            <div class="sitemap-box">
                                <h3>{{ env('APP_NAME') ?? "Citrusbug Technolabs" }}</h3>
                                <ul>
                                    @foreach($seos as $seolink)

                                    @if($seolink['parent_id'] == 0 && $seolink['page_name'])
                                    <li><a href="{{$seolink['url']}}"> {{ $seolink['page_name'] }} </a> </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        @foreach($seos as $seolink)
                        @if($seolink['page_name'] && @$seolink['children'])
                        <div class="grid-item col-lg-4 col-12 col-md-6 col-xl-4">
                            <div class="sitemap-box">
                                <h3>{{ $seolink['page_name'] }}</h3>
                                @if(@$seolink['children'])
                                <ul>
                                    @foreach($seolink['children'] as $children)
                                    <li><a href="{{$children['url']}}">{{$children['page_name']}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                        @endif

                        @endforeach

                    </div>
                </div>
            </div>
        </section>


    </div>
</div>
@endsection



@push('scripts')





@endpush