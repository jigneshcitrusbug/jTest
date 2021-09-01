<ul itemscope itemtype="https://schema.org/SiteNavigationElement">
    @foreach($technologies as $key=>$item)

    <li itemprop="name">

        <div class="cb-tech-box">

            <a itemprop="url" href="{{ route('site.tech',['slug'=>$item->slug]) }}">
                <div class="cb-tech-icon">
                    <img data-src="{{getasset($item->icon)}}" alt="{{ $item->title }}"
                        src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="60" height="60">
                </div>
                <h3>{{ $item->title }}</h3>
            </a>
        </div>

        {{-- <a itemprop="url" href="{{ route('site.tech',['slug'=>$item->slug]) }}">
        <!-- icon -->
        <div class="cb-menu-icon">

            @php
            $style = "-webkit-mask: url(".$item->icon."); mask: url(".$item->icon.");";
            @endphp

            <span class="service-icon service-circle1 no-repeat-50" style="{{ $style }}">
            </span>
        </div>
        <!-- icon -->

        <!-- content -->
        <div class="cb-content">
            <h3>{{ $item->title }}</h3>
            <p>{{ \Str::limit( strip_tags($item->desc) ,60,'...')  }}</p>
        </div>
        </a>
        <!-- content end--> --}}
    </li>
    @endforeach
</ul>