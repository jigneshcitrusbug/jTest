<section class="services-section" id="services" itemscope>
    <div class="container-fluid">
        <div class="services-div container-lg-2">
            <div class="heading-div">
                <h2>
                    {!! getSession('site_home_service_title', '') !!}
                </h2>
                <p>{!! getSession('site_home_service_desc',  '') !!}</p>
            </div>
            <div class="services-root" itemprop="articleBody">

                @foreach($services as $key=>$service)

                

                <div class="services-box services-box{{$key+1}}">
                    <a href="{{ route('site.service',['slug'=>$service->slug]) }}">
                        <div class="services-icons">
                            <span class="icon-span">
                                <span class="service-icon service-circle{{$key+1}}"></span>
                            </span>
                        </div>
                    </a>
                    <div class="services-content">
                        <a href="{{ route('site.service',['slug'=>$service->slug]) }}">
                            <h4>{{ $service->title }}</h4>
                        </a>
                        {{-- <p>{{ $service->intro }}</p> --}}
                        <p>
                            {{ \Str::limit( strip_tags($service->intro)  ,300,'...')  }}
                        </p>
                        <div class="link-box-div">
                            <a href="{{ route('site.service',['slug'=>$service->slug]) }}" class="btn btn-more">Learn
                                more</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="services-box services-box2">
                            <div class="services-icons">
                                <span class="icon-span">
                                    <span class="service-icon service-circle2"></span>
                                </span>
                            </div>
                            <div class="services-content">
                                <h4>UX/UI design</h4>
                                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to day, also asks us to remain</p>
                                <div class="link-box-div">
                                    <a href="#" class="btn btn-more">Learn more</a>
                                </div>
                            </div>
                        </div>

                        <div class="services-box services-box3">
                            <div class="services-icons">
                                <span class="icon-span">
                                    <span class="service-icon service-circle3"></span>
                                </span>
                            </div>
                            <div class="services-content">
                                <h4>Custom Software Development</h4>
                                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to day, also asks us to remain</p>
                                <div class="link-box-div">
                                    <a href="#" class="btn btn-more">Learn more</a>
                                </div>
                            </div>
                        </div>

                        <div class="services-box services-box4">
                            <div class="services-icons">
                                <span class="icon-span">
                                    <span class="service-icon service-circle4"></span>
                                </span>
                            </div>
                            <div class="services-content">
                                <h4>Mobile app developement</h4>
                                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to day, also asks us to remain</p>
                                <div class="link-box-div">
                                    <a href="#" class="btn btn-more">Learn more</a>
                                </div>
                            </div>
                        </div> -->

            </div>
        </div>
    </div>
</section>