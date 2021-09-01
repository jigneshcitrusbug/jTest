<header class="menubar-header">
    <div class="header-div">
      
      <div class="logo-div">
        <a class="logo_link" href="{{ $url }}">
          <img src="{{ getasset('/citrusbug/assets/images/logo-icon.svg') }}" class="img-fluid logo_img main-logo" alt="citrusbug" title="Citrusbug" loading="lazy" />
        </a>
      </div>

      <div class="breadcrumb-custom-div">
        <div class="breadcrumb-custom-row">
          <ul class="breadcrumb-list">
			@if(isset($technology))
            <li class="active"><a href="#" class="link">{{ $technology }}</a></li>
			@endif
            <li><a href="{{ $url }}/technology" class="link">Technology</a></li>
          </ul>
        </div>
      </div>

      <div class="nav-div">
        <nav class="nav-center-div">
          <div class="nav-m-bar">
            <button class="btn-menu open-nav" id="open-nav-menu" data-bs-toggle="offcanvas" data-bs-target="#offCanvasMenu" aria-controls="offCanvasMenu">
              <span class="bg-custom-icon menu-icon"></span>
            </button>
          </div>
        </nav>
      </div>
      
    </div>
  </header>