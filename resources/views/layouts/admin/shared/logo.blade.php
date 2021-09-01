<div class="sidebar-header">
    <div class="logo clearfix">
        <a href="{{route('admin.dashboard')}}" class="logo-text float-left"> 
            <div class="logo-img">
                <img style="max-width:50px;max-hight:50px;"   src="{{ getasset( getSession('ADMIN_LOGO',  'app-assets/img/logo.png') )}}" />
            </div>
            <span class="text align-middle">{{ config('app.name', 'Laravel') }}</span>
        </a>
        <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block">
            <i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i>
        </a>
        <a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a>
    </div>
</div>