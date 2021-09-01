<header class="menubar-header">
    <div class="header-div clearfix">
        <div class="logo-div">
            <a class="logo_link clearfix" href="{{ route('site.home') }}">
                <img data-src="{{ getasset('/assets/images/logo.svg') }}" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="img-fluid logo_img main-logo" alt="logo" width="38" height="30" />
            </a>

            <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "Organization",
                    "url": "{{ url('/') }}",
                    "logo": "{{ getasset('/assets/images/logo.svg') }}"
                }
            </script>

        </div>



        @if(@$breadcrumbs)
        <div class="header-work-text long-text">
            @foreach ($breadcrumbs as $k=>$item)
            <div>

                @if(@$item->url)
                <a href="{{ @$item->url }}">
                    <span>{{ Str::limit($item->title, 15) }}</span> </a>
                @else
                <span>
                    <span>{{ Str::limit($item->title, 15) }}</span> </span>
                @endif
            </div>
            @endforeach
        </div>
        @php
        $breadcrumbs = array_reverse($breadcrumbs);
        @endphp
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [
                    @foreach($breadcrumbs as $k => $item) {
                        "@type": "ListItem",
                        "position": {
                            {
                                $k + 1
                            }
                        },
                        "name": "{{ $item->title }}",
                        "item": "{{ @$item->url }}"
                    }
                    @if($k != count($breadcrumbs) - 1),
                    @endif
                    @endforeach

                ]
            }
        </script>

        @endif



        {{-- <div class="header-work-text long-text">
            <a href="#!">Frontend </a> <span>Technology</span>
        </div> --}}

        <nav class="nav-center-div">
            <div class="nav-m-bar">
                <a href="#" class="open-nav" id="open-nav">
                    <div class="menu-icon">
                        <div class="bar top">
                            <div class="fill"></div>
                        </div>
                        <div class="bar middle">
                            <div class="fill"></div>
                        </div>
                        <div class="bar bottom">
                            <div class="fill"></div>
                        </div>
                    </div>
                </a>
            </div>
        </nav>
    </div>
</header><!--  End of header -->
<!-- Menu strat here -->
<div class="slider-menu">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn closeNav">
            <img data-src="{{ getasset('/assets/images/icons/close.svg') }}" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Close Menu" width="24" height="24">
        </a>
        <!-- menu left header -->
        <header class="menubar-header menubar-header-open">
            <div class="header-div clearfix">
                <div class="logo-div">
                    <a class="logo_link clearfix closeNav" href="javascript:void(0)">
                        <img data-src="{{ getasset('/assets/images/logo.svg') }}" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="img-fluid logo_img main-logo" alt="logo" width="38" height="30">
                    </a>
                </div>
                <nav class="nav-center-div">
                    <a href="javascript:void(0)" class="back-to-home closeNav">Back TO HOME</a>
                </nav>
            </div>
        </header>
        <!-- menu left header end-->
        <div class="cb-menu-conatiner">
            <!-- menu -->
            <div class="cb-menu-inner-welcome ">
                <div class="welcome-menu desktop">
                    <ul>
                        <li><a style="cursor:pointer" data-link="work" class="welcome-link"><span>01</span>Work</a></li>
                        <li><a style="cursor:pointer" data-link="technolgy" class="welcome-link"><span>02</span>Tech</a></li>
                        <li><a style="cursor:pointer" data-link="service" class="welcome-link"><span>03</span>Service</a></li>
                        <li><a href="{{ route('site.about') }}" class="welcome-link"><span>04</span>About</a></li>
                    </ul>
                </div>

                <div class="welcome-menu mobile">
                    <ul itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <li itemprop="name"><a itemprop="url" href="{{ route('site.works') }}" class="welcome-link"><span>01</span>Work</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('site.technology') }}" class="welcome-link"><span>02</span>Tech</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('site.services') }}" class="welcome-link"><span>03</span>Service</a></li>
                        <li itemprop="name"><a itemprop="url" href="{{ route('site.about') }}" class="welcome-link"><span>04</span>About</a></li>
                    </ul>
                </div>

                <!-- menu list -->
                @php
                $menuProjects = [];
                $technologies = [];
                $services = [];
                @endphp
                <!-- menu option -->
                <div class="cb-menu-option" style="display: none;">
                    <a href="javascript:void(0)" class="closeSubNav"><img data-src="{{ getasset('/assets/images/icons/close.svg')}}" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Close Menu" width="24" height="24"></a>
                    <div id="cb-menu-option-inner">
                        <div class="cb-submenu cb-submenu-work" id="cb-submenu-work" style="display: none;">

                            <x-package-projects type="error" limit="5" template="menu_projects" menu='1' />

                        </div>
                        <div class="cb-submenu cb-submenu-technolgy cb-submenu-2" style="display: none;">

                            <x-package-tech template="menu_tech" menu='1' />



                        </div>
                        <div class="cb-submenu cb-submenu-service" style="display: none;">

                            <x-package-service template="menu_service" menu='1' />


                        </div>
                    </div>
                </div>
                <!-- menu option -->
            </div>

            <div class="cb-menu-footer">
                <div class="send-message">
                    {!! getSession('footer_contact_info', '') !!}
                    {{-- <h3>Send message</h3>
                    <a href="mailto:info@citrusbug.com">info@citrusbug.com</a> --}}
                </div>
                <div class="cb-social-link">

                    {{-- {!! getSession('site_social_links', '') !!}  --}}

                    {!! getSession('footer_social_links', '') !!}
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Menu end here -->