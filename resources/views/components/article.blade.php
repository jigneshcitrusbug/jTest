@if($articles->count()>0)
<section class="bloglist-section">
    <div class="container">
        <div class="bloglist-inner">
            <div class="row">

                <!-- heading -->
                <div class="col-lg-12">
                    <div class="blog-heading">
                        <h2>{{ $title }}</h2>
                    </div>
                </div>
                <!-- end heading -->

                <!-- blog listing -->
                <div class="col-xl-12 col-lg-12">
                    <div class="blog-lisiting-all ">
                        <div class="row">

                            @foreach ($articles as $item)
                            @php
                            $param = unserialize($item->param);
                            $image_main = @$param['image_main'];
                            $display_date = @$param['display_date'];
                            @endphp

                            <!-- blog-item -->
                            <div class="col-lg-4  col-md-4 col-sm-6 col-border">
                                <div class="blog-item">
                                    <div class="blog-body">
                                        <a href="{{ route('site.article',['slug'=>$item->slug])}}">
                                            <img data-src="{{getasset($image_main)}}" class="img-fluid lazyload"
                                                alt="{{ $item->title }}" loading="lazy"
                                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                                        </a>
                                    </div>

                                    <div class="blog-footer">

                                        <a href="{{ route('site.article',['slug'=>$item->slug])}}">

                                            <h3>{{ $item->title }}</h3>

                                            <span>{{ date('F, Y', strtotime($display_date) ) }} </span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- blog-item -->
                            @endforeach






                        </div>
                    </div>
                </div>
                <!-- end blog listing -->

                {{-- <!-- pagination -->
                <div class="col-lg-12">
                    <div class="pagination-div">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link" href="#" tabindex="-1"><img src="assets/images/icons/arrow-prev.png" alt=""></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">4</a></li>
                          <li class="page-item next ">
                            <a class="page-link" href="#"><img src="assets/images/icons/arrow-next.png" alt=""></a>
                          </li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination --> --}}

            </div>
        </div>
    </div>
</section>
@endif
{{-- 
<section class="blog-listing-section recent-post-section">
            <div class="container-fluid">
                <div class="blog-listing-inner">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="blog-category recent-post">
                                <h2>{{ $title }}</h2>

</div>
</div>
<div class="col-xl-12">
    <div class="blog-lisiting-all">



        <div class="row">



            @foreach ($articles as $item)
            @php
            $param = unserialize($item->param);
            $image_main = @$param['image_main'];
            @endphp
            <!-- blog-item -->
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-body">
                        <a href="{{ route('site.article',['slug'=>$item->slug])}}">
                            <img data-src="{{getasset(@$image_main)}}" loading="lazy" class="lazyload img-fluid"
                                alt="{{ $item->title }}" />
                        </a>
                    </div>

                    <div class="blog-footer">
                        <a href="{{ route('site.article',['slug'=>$item->slug])}}">
                            <h3>{{ $item->title }}</h3>
                            <div class="blog-info">
                                <span>{{ date('d F, Y', strtotime($item->created_at) ) }}</span>
                                <span>Read time {{ @$param['read_time'] }}</span>
                                <span>{{ @$item->views }} Views</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- blog-item -->
            @endforeach




        </div>




    </div>
</div>
</div>
</div>
</div>

</section> --}}