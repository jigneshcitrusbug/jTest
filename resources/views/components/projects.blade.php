<div id="pinContainer" class="project-container-main changetheme">
    <div class="project-menu">
        <div class="img-menu">
            <a href="{{route('site.work')}}">
                <img data-src="{{getasset('/assets/images/briefcase.png')}}" loading="lazy" class="lazyload"
                    alt="briefcase" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="27"
                    height="25" />
            </a>
        </div>

    </div>
    <div id="slideContainer" class="slide-conatiner owl-carousel">

        @foreach ($projects as $key=>$item)
        @php
        if ($key > 7){
        continue;
        }
        $param = unserialize($item->param);

        $image_main = @$param['image_main'];

        @endphp
        <section class="panel project-two project-{{$key+1}}" id="project-{{$key+1}}">
            <a href="{{route('site.work',['slug'=>$item->slug])}}">
                <div style="background-image:url('data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=')"
                    data-src="{!! getasset( @$image_main ) !!}" class="product_image lazy_bg">
                </div>
            </a>
            {{-- <div class="squre-shape">

            </div> --}}
            <!-- <div class="conatiner-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-content-two container-lg-2">
                            <h2>
                                {{-- {{$item->title}} --}}
                            </h2>

                            <div class="sub-heading">
                                <div class="row">
                                    {{-- <div class="col-xl-12 col-lg-12  br-1">
                                        <h3>Technology we used</h3>
                                        @foreach($item->technologies as $tech)
                                        <a class="{{ route('site.technology') }}">
                                            {{ $tech->title }}
                                        </a>,
                                        @endforeach
                                    </div> --}}
                                    <div class="col-xl-6 col-lg-6 col-12 ">
                                        {{-- {{$item->desc}} --}}
                                    </div>
                                </div>
                            </div>
                           
                           

                           

                        </div>
                    </div>
                    
                </div>
            </div> -->
            <!-- <div class="project-img">
            <a href="{{route('site.work',['slug'=>$item->slug])}}">
                <img  data-src="{!! getasset( @$image_main ) !!}" alt="{{ $item->title }}" loading="lazy" class="lazyload">
            </a>
            </div> -->
            <!-- <div class="btn-case-study button-common-div">
                          
                {{-- <a href="#" class="btn btn-common btn-case"> 
                    <span class="transform-text">View case study</span> <span class="arrow-right-circle"></span> 
                </a> --}}

                <a href="{{route('site.work',['slug'=>$item->slug])}}" class="btn btn-common btn-white"> 
                    <span class="btn-background"></span>

                    <span class="transform-text">View case study</span> 

                    <span class="arrow-right-circle"></span> 
                </a>ƒ
        
        </div> -->
        </section>
        @endforeach


    </div>
</div>





@push('scripts')

{{-- 
<script>
    $(window).on("load", function() {

        $('#slideContainer').owlCarousel({
        loop:true,
        stagePadding: 0,
        nav:false,
        smartSpeed: 600,
        dots:false,
        items:1, 
        responsiveClass:true,
        autoplayHoverPause:false,
        autoplay:true,
        center:true,
        responsive:{
                0:{
                    dots:false,
                    margin: 0,
                    stagePadding: 0,
                    items:1
                },

                737:{
                    dots:false,
                    margin: 0,
                    stagePadding: 0,
                    
                    items:1
                },
                766:{
                    dots:false,
                    margin: 0,
                    stagePadding: 0,
                    items:1
                },
                1025:{
                    items:1, 
                }
            }
    });

   
                    
});
</script> --}}
@endpush