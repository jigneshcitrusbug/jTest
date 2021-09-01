<div class="row">
    <div class="owl-carousel related-technology owl-theme">
        @if(count($projects) > 0)
        @foreach($projects as $project)
        <!-- owl start -->
        <div class="item">
            <div class="col-lg-12 col-md-12">
                <div class="project-item-box-root">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="img-thumb-banner">

                                @if(isset($project) && $project->projects_single_main->count())
                                @php
                                $image = $project->projects_single_main->first()->file_thumb_url;
                                @endphp
                                <img data-src="{{getasset('$image')}}"
                                    src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    class="img-fluid img-project-banner" alt="{{$project->title}}">
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="project-content">
                                <h3 class="mb-40">
                                    <span class="span-block font-italic color-project1">{{$project->title}}</span>
                                    <!-- <span class="span-block">Wine Community</span> -->
                                </h3>
                                <p>{{$project->desc}}</p>

                                <div class="btn-case-study button-common-div">

                                    {{-- <a href="#" class="btn btn-common btn-case"> 
                                                                    <span class="transform-text">View case study</span> <span class="arrow-right-circle"></span> 
                                                                </a> --}}

                                    <a href="{{route('site.work',['slug'=>$project->slug])}}"
                                        class="btn btn-common btn-white">
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
        </div>
        @endforeach
        @endif
        <!-- owl end -->
    </div>
</div>



@push('scripts')
<script>
    function execurteProjectSliderScript() {
    
        $('.related-technology').owlCarousel({
            loop:true,
            margin: 0,
            stagePadding: 0,
            nav:false,
            smartSpeed: 2000,
            dots:false,
            responsiveClass:true,
            autoplayHoverPause:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1,
                     
                }
            }
        });
    }


if (window.addEventListener){
    window.addEventListener("load", execurteProjectSliderScript, false);
}else if (window.attachEvent){
    window.attachEvent("onload", execurteProjectSliderScript);
}else{
    window.onload = execurteProjectSliderScript;
} 

</script>
@endpush