<ul itemscope itemtype="https://schema.org/SiteNavigationElement">
    @foreach ($projects as $key=>$item)
    @php
    $param = unserialize($item->param);
    $image_menu = @$param['image_menu'];

    @endphp
    <li class="{{ $key == 1 ? 'active' : '' }}" itemprop="name">
        <div class="work-item">
            <div class="work-number">
                <span>{{ $key+1 }}</span>
                <div class="work-content">
                    <h3> <a itemprop="url" href="{{route('site.work',['slug'=>$item->slug])}}">
                            {{$item->title}} </a> </h3>
                    <div class="work-img">
                        @if($image_menu)
                        <a href="{{route('site.work',['slug'=>$item->slug])}}">
                            <img data-src="{!! getasset( $image_menu ) !!}" class="lazyload" alt="{{$item->title}}"
                                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="261"
                                height="140" />
                        </a>
                        @endif
                    </div>

                    <p>{{ \Str::limit( strip_tags($item->desc) ,80,'...')  }}</p>
                </div>
            </div>
            <div class="work-arrow">
                <a href="{{route('site.work',['slug'=>$item->slug])}}">View more</a>
                <span class="arrow-right-circle"></span>
            </div>
        </div>
    </li>
    @endforeach
</ul>