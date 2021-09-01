<section class="ourtechnology-section ">
    <div class="container-fluid">
        @foreach($technologies as $key=>$item)


        @php
        $param = unserialize($item->param);

        @endphp

        <div class="bg-ourtechnology tech_bg_{{$key+1}} lazy_bg"
            style="background-image: url({{ getasset(@$param['image_cover'])}});"></div>

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
                    <div class="our-technology-listing" itemprop="articleBody">

                        @foreach($technologies as $key=>$item)

                        @php
                        $param = unserialize($item->param);

                        @endphp


                        <div class="technology-box">
                            <a href="{{ route('site.tech',['slug'=>$item->slug]) }}" class="tech_bg_{{$key+1}}"
                                data-id="{{$key+1}}">

                                <div class="bg-ourtechnology_mobile tech_bg_{{$key+1}} lazy_bg"
                                    style="background-image: url({{ getasset(@$param['image_cover'])}});">



                                </div>
                                <div class="ourtechnology_mobile_title">
                                    {{ $item->title }}
                                </div>

                                <div class="hover-description">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>

                                    {{-- {!! $item->desc !!} --}}
                                    <p>
                                        {{ \Str::limit( strip_tags(@$param['tag_line'])  ,150,'...')  }}
                                    </p>


                                    <span class="btn btn-learn-more">Learn More</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>