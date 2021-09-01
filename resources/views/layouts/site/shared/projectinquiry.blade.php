<div class="new-project start-project" id="new-project">
    <div class="new-project-top-div">
        <a href="#" class="project-btn-link">
            <span class="arrow-right-circle"></span>
        </a>
    </div>
    <div class="new-project-link-middle">
        <a href="#" class="link transform-link">Let’s Talk</a>
    </div>
</div>
<div class="start-new-project-form">
    <div id="start-new-project" class="start-new-project">
        <a href="javascript:void(0)" class="closebtn closeform"><img
                data-src="{{ getasset('/assets/images/icons/close.svg')}}"
                src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt="Close" width="24" height="24"></a>
        <header class="menubar-header menubar-header-open">
            <div class="header-div clearfix">
                <div class="logo-div">
                    <a class="logo_link clearfix closeform" href="javascript:void(0)">
                        <img data-src="{{ getasset('/assets/images/logo.svg') }}"
                            src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                            class="img-fluid logo_img main-logo" alt="logo" width="38" height="30">
                    </a>
                </div>
                <nav class="nav-center-div">
                    <a href="javascript:void(0)" class="back-to-home closeform">Back TO HOME</a>
                </nav>
            </div>
        </header>



        @include('layouts.site.shared.inquiryform')




    </div>
</div>




@push('scripts')

{{-- <script>
    function execurteProjectInquiryScript() {
      
};


if (window.addEventListener){
    window.addEventListener("load", execurteProjectInquiryScript, false);
}else if (window.attachEvent){
    window.attachEvent("onload", execurteProjectInquiryScript);
}else{
    window.onload = execurteProjectInquiryScript;
} 

</script> --}}
@endpush