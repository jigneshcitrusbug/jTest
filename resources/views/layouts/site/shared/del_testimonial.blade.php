<section class="testimonial-section">
    <!-- <div class="bg-ourtechnology" style="background-image: url(../assets/images/banner-inner.jpg);"></div> -->
    <div class="testimonial-inner">
        <div class="container-fluid">
            <div class="heading-div">
                <h2>
                    What People Are Saying About Us
                </h2>
                <p>
                    Don't just tack it from us, let our customers do the talking!
                </p>
                <br /><br />
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="owl-carousel testimonial-carousel owl-theme">
                        @foreach($testimonials as $item)
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img">
                                        <div class="testi-thumb">
                                            <div class="owner-img">
                                                <img data-src="{!!  @$item->manyfile->where('file_type','testimonials_single_main')->first()->file_thumb_url  !!}"
                                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                    alt="" />
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
                                            <img data-src="{{ getasset('/assets/images/quote.png') }}"
                                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                                alt="{!!$item->title!!}">
                                        </div>
                                        <h3>{!!$item->title!!}</h3>
                                        {!! $item->description !!}
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


@push('scripts')

<script>
    $(document).ready(function(){ 
    $('.testimonial-carousel').owlCarousel({
        loop:true,
        margin:0,
        stagePadding: 0,
        nav:true,
        smartSpeed: 600,
        dots:true,
        items:1,
        autoplay:true,
        navText: ['<span class="span-roundcircle left-roundcircle"><img src="{{ getasset('/assets/images/icons/arrow-left.png') }}" class="left_arrow_icon" alt="arrow" /></span>','<span class="span-roundcircle right-roundcircle"><img src="{{ getasset('/assets/images/icons/arrow-right.png') }}" class="right_arrow_icon" alt="arrow" /></span>'],
        responsive:{
            0:{
                items:1,
                dots:false,
                nav:false,
            },
            600:{
                items:1,
                 dots:false,
                nav:false,
            },
            1000:{
                items:1,
                dots:false,
                nav:true,
            },   
        }
    });
});
</script>
@endpush