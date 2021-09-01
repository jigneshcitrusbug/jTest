@if($projects->count() > 0)

@php
$selected_project = "";
if(isset($technologyObj)){
	$paramT = unserialize($technologyObj->param);
	$selected_project = @$paramT['selected_projects'];
}else if(isset($servicesObj)){
	$paramS = unserialize($servicesObj->param);
	$selected_project = @$paramS['selected_projects'];
}

@endphp

<section class="aboutus-value-section single-tech nh bb">
    <div class="container">
        <div class="the-team-div container-lg-2">

            <div class="heading-div">
                <div class="row  align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <h2>Selected Projects</h2>

                    </div>
                    <div class="col-lg-8 col-md-8">
                        <p>{{ $selected_project }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="project-view-section np" id="case-study-section">

    @foreach ($projects as $work)
    @php
    $param = unserialize($work->param);
    $project_work_height = @$param['project_work_height'];
    $tech = $work->technologies->pluck('slug');
    $tclass = "";

    $image_main = @$param['image_main'];
    $image_thumb_1 = @$param['image_thumb_1'];
    $image_thumb_2 = @$param['image_thumb_2'];

    foreach($tech as $t){
    $tclass .= " ".$t;
    }
    @endphp
    <div class="project-list">
        <a href="{{route('site.work',['slug'=>$work->slug])}}">
            <div class="image-mask">
                <div class="image-wrapper">
                    <picture class="Picture image cover">

                        <img loading="lazy" class="lazyload" data-src="{{getasset(@$image_main)}}" draggable="true"
                            alt="" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                    </picture>
                    <div class="image-overlay"></div>
                </div>
            </div>
            <div class="container">
                <div class="row item ">
                    <div class="col-12 col-xl-6 col-lg-6 col-md-12 col-sm-12 main all {{ $tclass }} ">
                        <h2>{{ $work->title}} </h2>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-12 col-sm-12 info  all {{ $tclass }} ">
                        <p>{{ $work->desc}}</p>
                        <div class="link">
                            <div class="btn-case-study button-common-div">


                                <span class="transform-text">View case study</span>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </a>

    </div>
    @endforeach


</section>
@endif