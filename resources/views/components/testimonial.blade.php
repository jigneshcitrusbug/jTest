<section class="testimonial-two-section">
    <!-- <div class="bg-ourtechnology" style="background-image: url(../assets/images/banner-inner.jpg);"></div> -->
    <div class="testimonial-two-inner">
        <div class="container">
            {{-- <div class="heading-div">
                <h2>
                    When Our Customers Speak for Us
                </h2>
                <p>
                    Hear why customers find Citrusbug irreplaceable
                </p>
                <br /><br />
            </div> --}}
            <div class="row ">
                {{-- <div class="col-lg-12"> --}}
                <div class="owl-carousel owl-theme testimonial-2-carousel ">
                    @foreach($testimonials as $item)
                    @php
                    $param = unserialize($item->param);

                    $image_main = @$param['image_main'];

                    $industry = @$param['industry'];
                    $employee = @$param['employee'];
                    $address = @$param['address'];
                    $review_date = @$param['review_date'];

                    $project_title = @$param['project_title'];
                    $project_task = @$param['project_task'];
                    $project_price = @$param['project_price'];
                    $project_date = @$param['project_date'];

                    $summary = @$param['summary'];
                    $clutch_url = @$param['clutch_url'];

                    @endphp
                    {{-- <div class="item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img">
                                        <div class="testi-thumb">
                                            <div class="owner-img">
                                                <img data-src="{!! getasset( @$image_main ) !!}" alt="" loading="lazy"
                                                    class="lazyload" />
                                            </div>
                                            <div class="owner-info">
                                                <h3>{{$item->name}}</h3>
                    <p>{{$item->position}}</p>
                </div>
                <div class="outlined-box"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="testimonial-content">
            <div class="quote-img">
                <img data-src="{{ getasset('/assets/images/quote.png') }}" alt="{!!$item->title!!}" loading="lazy"
                    class="lazyload">
            </div>
            <h3>{!!$item->title!!}</h3>
            {!! $item->description !!}
            <p>{!! $company !!}</p>
        </div>
    </div>
    </div>
    </div> --}}

    <!-- item start -->
    <div class="item">
        <div class="col-lg-12">
            <div class="testimonial-box">
                <div class="row row-0">
                    <div class="col-xl-9 col-lg-8 col-md-12 pad-0">
                        <div class="about-project">
                            <div class="row row-0">
                                <div class="col-xl-5 col-lg-12 pad-0 br-1 bb-1">
                                    <div class="content-box ">
                                        <h3>The Project</h3>
                                        <h4>{{ @$project_title}}</h4>
                                        <ul>
                                            <li>
                                                <span class="icons "><i class="fe fe-tv rotate"></i></span>
                                                {{ @$project_task}}
                                            </li>
                                            <li>
                                                <span class="icons"><i class="fe fe-tag"></i></span>
                                                {{ @$project_price}}
                                            </li>
                                            <li>
                                                <span class="icons"><i class="fe fe-calendar"></i></span>
                                                {{ @$project_date}}
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 pad-0 br-1 bb-1">
                                    <div class="content-box-two">
                                        <div class="content">
                                            <h3>THE REVIEW </h3>
                                            <h4>{!!@$item->title!!}</h4>
                                        </div>

                                        <div class="date">
                                            <p>{{ @$review_date}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3  col-lg-6 pad-0 br-1 bb-1">
                                    <div class="rating-div">
                                        <div class="rating-star">
                                            <h3>05</h3>
                                            <ul>
                                                <li>
                                                    <a href="javascript: void(0);">
                                                        <span class="material-icons">
                                                            star
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">
                                                        <span class="material-icons">
                                                            star
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">
                                                        <span class="material-icons">
                                                            star
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">
                                                        <span class="material-icons">
                                                            star
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">
                                                        <span class="material-icons">
                                                            star
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <p>Quality<span>0.5</span></p>
                                        <p>Schedule<span>0.5</span></p>
                                        <p>Cost<span>0.5</span></p>
                                        <p>Willing to refer<span>0.5</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-0">
                                <div class="col-xl-5 col-lg-6 pad-0 br-1 ">
                                    <div class="content-box-three">
                                        <h3>Project summary:</h3>
                                        {!! @$summary!!}

                                        {{-- {{ \Str::limit( strip_tags(@$summary)  ,200,'...')  }} --}}

                                    </div>
                                </div>

                                <div class="col-xl-7 col-lg-6 pad-0 br-1 ">
                                    <div class="content-box-three">
                                        <h3>Feedback summary:</h3>
                                        {!!@$item->description!!}
                                        {{-- {{ \Str::limit( strip_tags(@$item->description)  ,250,'...')  }} --}}

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12 pad-0">
                        <div class="content-profile">
                            <h3>THE REVIEWER</h3>
                            <h4>{{$item->position}}</h4>

                            <div class="profile-detail">
                                <div class="profile-pic-txt-bx">
                              <div class="profile-pic"> 
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                        data-src="{!! getasset( @$image_main ) !!}" width="100" height="100"
                                        alt="{{$item->name}}">
                              </div>
                              <div class="profile-title-div">
                                <h3>{{$item->name}}</h3>
                              </div>
                            </div>

                                <ul>
                                    <li>
                                        <span class="icons "><i class="fe fe-briefcase"></i></span>
                                        {{@$industry}}
                                    </li>
                                    <li>
                                        <span class="icons"><i class="fe fe-user"></i></span>
                                        {{@$employee}}
                                    </li>
                                    <li>
                                        <span class="icons"><i class="fe fe-map-pin"></i></span>
                                        {{@$address}}
                                    </li>

                                    <li>
                                        <span class="icons"><i class="fe fe-message-square"></i></span>
                                        Phone Interview
                                    </li>

                                    <li>
                                        <span class="icons"><i class="fe fe-shield"></i></span>
                                        Verified
                                    </li>

                                </ul>



                            </div>

                            <div class="button-common-div read-more-div">
                                <a href="{{@$clutch_url}}" rel="nofollow" target="_blank" class="btn btn-common btn-readmore"><span
                                        class="c-icon">
                                        <img data-src="{{ getasset('/assets/images/c-icon.svg') }}"
                                            src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                            alt="Read More" width="28" height="30">
                                    </span> <span class="transform-text nt">read more</span> <span
                                        class="arrow-right-circle"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- item end -->
    @endforeach
    </div>
    {{-- </div> --}}
    </div>
    </div>
    </div>
</section>


@push('scripts')

{{-- <script>
    function execurteTesimonialScript(){
       
    }


if (window.addEventListener){
    window.addEventListener("load", execurteTesimonialScript, false);
}else if (window.attachEvent){
    window.attachEvent("onload", execurteTesimonialScript);
}else{
    window.onload = execurteTesimonialScript;
} 


</script> --}}
@endpush