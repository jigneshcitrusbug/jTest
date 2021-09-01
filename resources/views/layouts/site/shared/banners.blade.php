<div class="slides">
    @if(@$banner->images)
        {!! $banner->images !!}
    @elseif(@$images)
        {!! $images !!}
    @endif
</div>
<section class="banner-section">
    <div class="line-1"></div>
    <div class="banner-div">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="content-div">
                        <div class="heading-content">
                            <h1>
                                @if(@$banner->description)
                                    {!! $banner->description !!}
                                @elseif(@$description)
                                    {!! $description !!}
                                @endif                              
                            </h1>
                        </div>
                        <div class="bottom_content">

                            @if(@$banner->desc)
                                {!! $banner->desc !!}
                            @elseif(@$desc)
                                {!! @$desc !!}
                            @endif      
                             
                            <div class="mouse-icon-div">
                                <a id="scrollToMainArea" style="cursor:pointer"><span class="mouse-icon"></span></a>
                                <!-- <a href="#{{@$nextsection ? @$nextsection : 'main-middle-area'}}" class="link"> <span class="mouse-icon"></span> </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>