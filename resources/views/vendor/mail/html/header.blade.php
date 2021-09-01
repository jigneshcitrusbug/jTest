<tr>
    <td class="header">
        <div class="header_container">
            <a href="{{ $url }}">
                <div class="logo-div">
                    <span class="logo_link clearfix" href="{{ route('site.home') }}">
                        <img src="{{ url('assets/images/citrusbug-mail-logo.png') }}" class="img-fluid logo_img main-logo"
                            alt="logo" />
                    </span>
                </div>
                {{-- <div class="site_title">
                    {{ $slot }}
                </div> --}}
            </a>
        </div>
    </td>
</tr>