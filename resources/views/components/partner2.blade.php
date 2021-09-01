<section class="interview-section changetheme">
    <div class="container-fluid">
        <div class="interview-div align-items-center">

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="content-div">
                        <div class="heading-div">
                            @if(@$hiretitle)
                            <h3> {!! $hiretitle !!} </h3>
                            @else
                            <h3> {!! getSession('site_home_hire_title') !!} </h3>
                            @endif
                            @if(@$hiretext)
                            <p>{!! $hiretext !!}</p>
                            @else
                            <p>{!! getSession('site_home_hire_text') !!} </p>
                            @endif
                            <div class="button-common-div">
                                <a href="#" class="btn btn-common btn-white start-project">
                                    <span class="btn-background"></span>


                                    <span class="transform-text">Let’s
                                        Talk</span>
                                    <span class="arrow-right-circle"></span>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="interview-thumb">
                        <img loading="lazy" data-src="{{getasset('/assets/images/interview.png')}}"
                            class="img-fluid img-center lazyload" alt=""
                            src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="485" height="684" />
                        <div class="outlined-box"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>