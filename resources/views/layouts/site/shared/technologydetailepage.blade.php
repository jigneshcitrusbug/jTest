<section class="ourtechnology-section ">
    <!-- <div class="bg-ourtechnology" style="background-image: url(../assets/images/banner-inner.jpg);"></div> -->
    {{-- <div class="bg-ourtechnology one" style="background-image: url(../assets/images/banner-inner.jpg);"></div>
    <div class="bg-ourtechnology two" style="background-image: url(../assets/images/banner1.jpg);"></div>
    <div class="bg-ourtechnology three" style="background-image: url(../assets/images/bg-technology.png);"></div> --}}

    <div class="container-fluid">
        @foreach($technologies as $key=>$item)

        @if($item->onefile()->where('file_type','technologies_single_main')->first())
        <div class="bg-ourtechnology tech_bg_{{$key+1}} lazy_bg"
            style="background-image: url({{$item->onefile()->where('file_type','technologies_single_main')->first()->file_thumb_url}});">
        </div>
        @else
        <div class="bg-ourtechnology tech_bg_{{$key+1}} lazy_bg" style="background-image: url();"></div>
        @endif
        @endforeach
        <div class="technology-section-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-div">
                        <h2>
                            {!! getSession('site_home_technology_title', '') !!}
                        </h2>
                        <p>
                            {{ getSession('site_home_technology_desc',  '') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row" itemscope>
                <div class="col-lg-12">
                    <div class="our-technology-listing">

                        @foreach($technologies as $key=>$item)

                        <div class="technology-box">
                            <a href="{{ route('site.tech',['slug'=>$item->slug]) }}" class="tech_bg_{{$key+1}}"
                                data-id="{{$key+1}}">
                                {{ $item->title }}
                                <div class="hover-description">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>

                                    {{-- {!! $item->desc !!} --}}
                                    <p>
                                        {{ \Str::limit( strip_tags($item->desc)  ,150,'...')  }}
                                    </p>


                                    <span href="{{ route('site.tech',['slug'=>$item->slug]) }}"
                                        class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        {{-- <div class="technology-box">
                            
                            <a href="#" class="two">
                                Angular

                                <div class="hover-description">
                                    <h3>Angular</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                            
                        </div>

                        <div class="technology-box">
                            
                            <a href="#" class="three">
                                Php

                                <div class="hover-description">
                                    <h3>Php</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        <div class="technology-box">
                            
                            <a href="#">
                                Python
                                <div class="hover-description">
                                    <h3>Python</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>

                        <div class="technology-box">
                            
                            <a href="#">
                                Node
                                <div class="hover-description">
                                    <h3>Node</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        <div class="technology-box">
                            
                            <a href="#">
                                React native
                                <div class="hover-description">
                                    <h3>React Native</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        <div class="technology-box">
                            
                            <a href="#">
                                ML & AI
                                <div class="hover-description">
                                    <h3>ML & AI</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        <div class="technology-box">
                            
                            <a href="#">
                                Cloud & DevOps 
                                <div class="hover-description">
                                    <h3>Cloud & DevOps</h3>
                                    <p>Duis accumsan tincidunt mi, et malesuada leo placerat et. Quisque ut molestie leo. Mauris luctus pellentesque erat, non sodales arcu aliquet eu. Ut congue placerat accumsan.
                                    </p>
                                    <p><span>"Duis accumsan tincidunt mi, et malesuada leo placerat et.”</span></p>

                                    <span href="#" class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div> --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




{{-- <section class="services-section technology-section" id="technology">
    <div class="container-fluid">
        <div class="services-div container-lg-2">
            <div class="heading-div">
                <h2>
                    {!! getSession('site_home_technology_title', '') !!}
                </h2>
                <p>{{ getSession('site_home_technology_desc',  '') }}</p>
</div>
<div class="services-root">

    @foreach($technologies as $key=>$item)
    <div class="services-box services-box{{$key+1}}">
        <a href="{{ route('site.tech',['slug'=>$item->slug]) }}">
            <div class="services-icons">
                <span class="icon-span">
                    <span class="service-icon service-circle{{$key+1}}"></span>
                </span>
            </div>
        </a>
        <div class="services-content">
            <a href="{{ route('site.tech',['slug'=>$item->slug]) }}">
                <h4>{{ $item->title }}</h4>
            </a>
            <p>{{ $item->intro }}</p>
            <div class="link-box-div">
                <a href="{{ route('site.tech',['slug'=>$item->slug]) }}" class="btn btn-more">Learn
                    more</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
</section> --}}