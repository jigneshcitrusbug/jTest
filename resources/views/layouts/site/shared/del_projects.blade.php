<div id="pinContainer" class="project-container-main changetheme">
    <div class="project-menu">
        <div class="img-menu">
            <img data-src="{{getasset('/assets/images/briefcase.png')}}"
                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="briefcase" />
        </div>
        {{-- <ul>
            @foreach ($projects as $key=>$item)
            <li><a href="#project-{{$key+1}}" class="active">0</a></li>
        @endforeach

        </ul> --}}
    </div>
    <div id="slideContainer" class="slide-conatiner owl-carousel">
        <section class="panel project-one" id="project-one">
            <div class="conatiner-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-content-one container-lg-2">

                            <h2>{!! getSession('site_home_project_title', '') !!} </h2>
                            {!! getSession('site_home_project_desc') !!}

                            {{-- <h2>A small selection
                                <span class="span-block">of our work, enjoy.</span></h2>

                            <p>We are a digital agency that specializes in User Experience Design</p> --}}


                        </div>
                    </div>

                </div>
            </div>
            <div class="project-img">
                <img data-src="{{getasset('/assets/images/project.png')}}"
                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Projects">
            </div>
        </section>
        @foreach ($projects as $key=>$item)
        @php
        if ($key > 7){
        continue;
        }
        @endphp
        <section class="panel project-two project-{{$key+1}}" id="project-{{$key+1}}">
            {{-- <div class="squre-shape">

            </div> --}}
            <div class="conatiner-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-content-two container-lg-2">
                            <h2>
                                {{$item->title}}
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
                                <div class="col-xl-8 col-lg-8 ">
                                    {{$item->desc}}
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

            </div>
    </div>
    <div class="project-img">
        <img data-src="{!!  @$item->projects_single_main->first()->file_thumb_url  !!}"
            src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="{{ $item->title }}">
    </div>
    <div class="btn-case-study button-common-div">

        {{-- <a href="#" class="btn btn-common btn-case"> 
                    <span class="transform-text">View case study</span> <span class="arrow-right-circle"></span> 
                </a> --}}

        <a href="{{route('site.work',['slug'=>$item->slug])}}" class="btn btn-common btn-white">
            <span class="btn-background"></span>

            <span class="transform-text">View case study</span>

            <span class="arrow-right-circle"></span>
        </a>

    </div>
    </section>
    @endforeach
    {{-- <section class="panel project-five"  id="project-five">
            <div class="conatiner-fluid">
                <div class="row">
                
                    <div class="col-lg-12">
                        <div class="project-content-five container-lg-2">
                           
                          
                           
                            <div class="view-all-section">
                                <div class=" view-all-project">

                                    {!! getSession('site_home_project_last_slide_text')  !!}
                                    
                                     

                                    <div class="btn-case-study button-common-div">
                           
                                        <a href="#" class="btn btn-common btn-black"> 
                                            <span class="btn-background"></span>
    
                                            <span class="transform-text">View case study</span> 
    
                                            <span class="arrow-right-circle"></span> 
                                        </a>
                                
                                </div>

                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                   
                </div>
                <div class="project-img">
                    <img src="{{getasset('/assets/images/view-all-project.png')}}" class="" alt="view-all-project">
</div>
</div>
</section> --}}

</div>
</div>





@push('scripts')


<script>
    jQuery(document).ready(function($){
        $('#slideContainer').owlCarousel({
        loop:true,
        stagePadding: 0,
        nav:false,
        smartSpeed: 600,
        dots:true,
        items:1, 
        responsiveClass:true,
        autoplayHoverPause:false,
        autoplay:true,
        responsive:{
                0:{
                    dots:false,
                    margin: 10,
                    stagePadding: 0,
                    items:1
                },

                737:{
                    dots:false,
                    margin: 10,
                    stagePadding: 0,
                    
                    items:1
                },
                766:{
                    dots:false,
                    margin: 10,
                    stagePadding: 0,
                    items:1
                },
                1025:{
                    items:1, 
                     
                     
                }
            }
    });

 });
</script>
@endpush