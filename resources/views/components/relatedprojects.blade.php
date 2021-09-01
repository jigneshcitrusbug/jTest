@if($projects->count()>0)
<section class="project-view-section gray_bg" id="case-study-section">
    <div class="container-fluid">
        <div class="project-view-div">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-section">
                        {!! getSession('site_work_title', '') !!}
                        <p>{!! getSession('site_work_description', '') !!}</p>
                    </div>
                </div>
            </div>
            <div class="all-workslider">

                <div class="  row ">

                    @foreach ($projects as $work)
                    @php
                    $param = unserialize($work->param);
                    $project_work_height = @$param['project_work_height'];
                    $tech = $work->technologies->pluck('slug');
                    $image_main = @$param['image_main'];
                    $image_thumb_1 = @$param['image_thumb_1'];
                    $image_thumb_2 = @$param['image_thumb_2'];

                    $tclass = "";
                    foreach($tech as $t){
                    $tclass .= " ".$t;
                    }
                    @endphp
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 all {{ $tclass }} ">
                        <a href="{{route('site.work',['slug'=>$work->slug])}}">
                            <figure class="single-item all-wrok-img">

                                @if(isset($work) && $image_main)
                                <img alt="{{ $work->title}}" data-src="{{getasset(@$image_thumb_1)}}" loading="lazy"
                                    class="lazyload" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                                @endif
                                <figcaption>
                                    <h2>{{ $work->title}}</h2>
                                    {{-- <p>{{ $work->desc}}</p> --}}
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif