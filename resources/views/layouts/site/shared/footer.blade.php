<footer class="">
    <section class="footer-root ">
        <div class="footer-inner">
            <div class="container-fluid ">
                <div class="messages-footer-div ">
                    <div class="row">
                        <div class="col-md-12">
                            {!! getSession('footer_button_text', '') !!}
                        </div>
                    </div>
                </div>

            <div class="bottom-footer-container  ">

                <div class="info-link-footer-div">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 col-6">
                            <div class="footer-link">
                                <ul>
                                    <li><a href="{{ route('site.works') }}">Work </a></li>
                                    <li><a href="{{ route('site.services') }}">Services </a></li>
                                    <li><a href="{{ route('site.technology') }}">Technology </a></li>
                                    <li><a href="{{ route('site.blog') }}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-2 col-6">
                            <div class="footer-link">
                                <ul>
                                    
                                    <li><a href="{{ route('site.about') }}">About us </a></li>
                                    <li><a href="{{ route('site.careers') }}">Career</a></li>
                                    <li><a href="{{ route('site.sitemap') }}">Sitemap</a></li>

                                    <li><a href="{{ route('site.contact') }}">Contact</a></li>
                                    {{-- <li><a href="{{ route('site.team') }}">Our team </a></li> --}}
                                    {{-- <li><a href="#">Contact</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-12">


                            <div class="contact-info-footer">
                                <div class="contact-info-row contact-info-row-full">
                                    {!! getSession('footer_development_center', '') !!}
                                </div>
                                <div class="contact-info-row contact-info">
                                    {!! getSession('footer_contact_info', '') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-div container-lg-2">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="messages-bottom-div">
                            <p><span>© 2013 - {!! date('Y') !!} CITRUSBUG.</span> All rights reserved</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-end">
                            <div class="social-links-bottom">
                                {!! getSession('footer_social_links', '') !!}
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</footer>
 