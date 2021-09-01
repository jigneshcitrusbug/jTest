<section class="ourtechnology-section ">
    <div class="container-fluid">
        <div class="technology-section-inner">

            <div class="row">
                <div class="col-lg-12 col-md-12">
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

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tech-root">

                        @foreach($technologies as $key=>$item)

                        @php
                        $param = unserialize($item->param);
                        $even = (($key+1) % 2) == 0 ? true : false;
                        @endphp

                        <div class="tech-box tech-box-{{ $even == true ? 'right' : 'left' }}">
                            <div class="column-40 {{ $even == true ? '' : 'order-2' }}">
                                <div class="img-shape-div">
                                    <img data-src="{{ getasset('/assets/images/icons/shape-arrow-'.($even == true ? 'view1' : 'view2').'.svg')}}"
                                        loading="lazy" class="shape-arrow-view shape-view1 lazyload" alt="shapes"
                                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />


                                    <img data-src="{{ getasset(@$param['icon_black'])}}"
                                        class="shape-arrow-tech shape-tech1 lazyload" alt="shapes" loading="lazy"
                                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />



                                </div>
                            </div>
                            <div class="column-60">
                                <div class="tech-content-div">
                                    <h2> {{ $item->title }}
                                        <span class="lines-hr lines-hr32 mt-40"></span>
                                    </h2>
                                    <p>
                                        {{ \Str::limit( strip_tags(@$param['tag_line'])  ,150,'...')  }}
                                    </p>



                                    <div class="tech-icon-box-root mt-40">
                                        @php
                                        $tech_images = $item->technologies_multiple_tech;

                                        @endphp
                                        @if($tech_images)
                                        @foreach($tech_images as $tech_image)
                                        <div class="tech-icon-box" itemprop="articleBody">
                                            <img data-src="{{ getasset($tech_image->file_thumb_url) }}" alt="technology"
                                                loading="lazy" class="lazyload"
                                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                                        </div>
                                        @endforeach
                                        @endif


                                    </div>
                                    <div class="button-common-div">

                                        <a href="{{ route('site.tech',['slug'=>$item->slug]) }}"
                                            class="btn btn-common btn-white">
                                            <span class="btn-background"></span>
                                            <span class="transform-text"> Learn More </span>
                                            <span class="arrow-right-circle"></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>