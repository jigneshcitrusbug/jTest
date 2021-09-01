 
<section class="case-study-section changetheme" id="case-study-section">
     <div class="container-fluid">
         <div class="case-study-div">

             <div class="row">
                 <div class="col-lg-12 col-md-12">
                     <div class="heading-div">
                         <h2>
                             <span class="span-block">A small selection</span>
                             <span class="span-block">of <a href="#" class="link1">My work</a>, enjoy.</span>
                         </h2>
                         <p>We are a digital agency that specializes in User Experience Design</p>
                     </div>
                 </div>
             </div>

             <div class="row" id="case-study-container">
                 <div class="col-lg-12 col-md-12">

                     <div class="slider-tab-fixed">
                         <div class="slider-list-tabs">
                             <ul>

                                 <li><a href="#" class="top"><span class="arrow-right-circle arrow-up-circle"></span></a></li>

                                 @foreach ($projects as $key=>$item)
                                 <li><a href="#case-study{{$key+1}}" class="slider-link">{{$key+1}}</a></li>
                                 @endforeach
                                 {{-- <li><a href="#case-study1" class="slider-link active">1</a></li>
                                 <li><a href="#case-study2" class="slider-link">2</a></li> --}}
                                 <!-- <li><a href="#" class="slider-link">3</a></li>
                                        <li><a href="#" class="slider-link">4</a></li> -->
                             </ul>
                         </div>
                     </div>

                    

                     @foreach ($projects as $key=>$item)
                        
                        <div class="case-study-root case-study-pattern{{($key%2)+1}} case-study{{$key+1}}" id="case-study{{$key+1}}">

                            <div class="column-100">

                                @if($key%2==0)
                                <div class="column-45">
                                </div>
                                <div class="column-55">
                                    <div class="content-text-div">
                                        <h3>
                                            {{-- <span class="span-block span-color span-color1 font-italic">World's Largest </span>
                                            <span class="span-block">Wine Community</span> --}}
                                            {{$item->title}}
                                        </h3>
                                        <p>
                                            {{$item->desc}}

                                            </p>
                                    </div>
                                </div>

                                @else 

                                <div class="column-90 patter2-full">
                                    <div class="content-text-div">
                                        <h3>
                                            {{-- <span class="span-block span-color span-color2 font-italic"><span class="common-inherit">The</span> Best Coffee </span>
                                            <span class="span-block">You've Ever Made</span> --}}
                                            {{$item->title}}
                                        </h3>
                                        <p>{{$item->desc}}</p>
                                    </div>
                                </div>

                                @endif 

                                


                               


                            </div>
   
                            <div class="column-100">
                                <div class="case-study-banner">
                                    <div class="img-cover"> 
                                        @if($item->manyfile->where('file_type','projects_single_image')->count())
                                            <img src="{!! getasset(' $item->manyfile->where('file_type','projects_single_image')->first()->file_thumb_url )  !!}" alt="case-study" class="img-fluid case-study-cover" /> 
                                        
                                        @endif
                                    </div>
                                    <div class="scroll-btn-div">
                                        <a href="#case-study{{$key+2}}" class="scroll-btn"> <span class="transform-text">Scroll</span> <span class="arrow-right-circle arrow-down-circle"></span> </a>
                                    </div>
                                </div>
                            </div>
   
                            <div class="column-100">
                                <div class="button-common-div">
                                    <a href="{{route('site.work',['slug'=>$item->slug])}}" class="btn btn-common btn-black"> 
                                       <span class="btn-background"></span>
   
                                       <span class="transform-text">View case study</span> 
   
                                       <span class="arrow-right-circle"></span> 
                                   </a>
                                </div>
                            </div>
   
                        </div>
                         
                     @endforeach

                    

                    



                 </div>
             </div>

         </div>
     </div>
 </section>



 @push('scripts')
 <script>
     $(window).on("load", function() {
 
@foreach ($projects as $key=>$item)
 

new ScrollMagic.Controller().addScene(
    new ScrollMagic.Scene({
        triggerElement: '#case-study-container .case-study{{$key+1}}',
        triggerHook: 0.2,
        duration: "80%"
    })
 
    .setTween(
        gsap.to('.case-study-section .case-study-div .case-study{{$key+1}} .scroll-btn-div', 3, { opacity:1, y: 0, ease: Linear.easeNone })
    )
)
@endforeach
     });
</script>
@endpush