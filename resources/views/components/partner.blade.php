<section class="hire-developer changetheme">
    <div class="hire-developer-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hire-developer-content" itemprop="articleBody">


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
                        <a href="#" class="start-project">Let’s Talk <img loading="lazy" class="lazyload"
                                data-src="{{getasset('/assets/images/icons/arrow-right-circle.png')}}" alt="Let’s Talk"
                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>