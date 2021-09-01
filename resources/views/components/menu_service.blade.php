<ul itemscope itemtype="https://schema.org/SiteNavigationElement">
    @foreach($services as $key=>$service)
    <li itemprop="name">
        <a itemprop="url" href="{{ route('site.service',['slug'=>$service->slug]) }}">
            <!-- icon -->
            <div class="cb-menu-icon">

                @php
                $style = "-webkit-mask: url(".getasset($service->icon)."); mask:
                url(".getasset($service->icon).");";
                @endphp
                <span class="service-icon service-circle1 no-repeat-50" style="{{ $style }}">

                </span>
            </div>
            <!-- icon -->

            <!-- content -->
            <div class="cb-content">
                <h3>{{ $service->title }}</h3>
                {!! $service->intro !!}
                <span>Learn more....</span>
                {{-- <p>{{ \Str::limit( strip_tags($service->intro)  ,80,'...')  }}</p> --}}
                {{-- <p>We build modern client-server applications based on the latest PHP frameworks <span>Do something amazing for you !</span></p> --}}
            </div>
        </a>

    </li>
    @endforeach
</ul>