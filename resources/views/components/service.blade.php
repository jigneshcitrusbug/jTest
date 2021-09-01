<section class="services-section" id="services" itemscope>
    <div class="container-fluid">
        <div class="services-div">
            <div class="heading-div">
                <h2>
                    {!! getSession('site_home_service_title', '') !!}
                </h2>
                {!! getSession('site_home_service_desc',  '') !!}
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
                        <p>
                            {{ \Str::limit( strip_tags($service->intro)  ,300,'...')  }}
                        </p>
                        <div class="link-box-div">
                            <a href="{{ route('site.service',['slug'=>$service->slug]) }}" title="Learn
                                more - {{ $service->title }}" class="btn btn-more">Learn
                                more</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>