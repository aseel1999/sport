<header id="header">
    <div class="top-header">
        <div class="container">
            <div class="time-site d-flex align-items-center">
                <i class="fa-regular fa-clock"></i>
                <p> {{ $setting->created_at->translatedFormat('l j F Y')}} </p>
            </div>
            <ul class="list-social">
                <li><a href="{{ $setting->linked }}"target="_blank"><i class="fa-solid fa-info"></i></a></li>
                <li class="list-play"><a href="{{ $setting->play }}"target="_blank"><i class="fa-solid fa-play"></i></a></li>
                <li><a href="{{ $setting->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href="{{ $setting->paper }}" target="_blank"><i class="fa-solid fa-paper-plane"></i></a></li>
                <li><a href="{{ $setting->whatsapp }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="{{ $setting->facebook }}"target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="{{ $setting->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="{{ $setting->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="logo-site">
                <a href="{{ url(getLocal().'/') }}">
                    <img src="{{ $setting->app_logo}}"alt="logo" />
                </a>
            </div>
            <div class="banner-header">
                <a href="{{ url(getLocal().'/') }}"><img src="{{$setting->banner_header}}" alt="" /></a>
            </div>
        </div>
    </div>
    @php
          
        $sports=App\Models\Sport::orderBy('id','desc')->get();
@endphp
    <div class="bt-header">
        <div class="container">
            <ul class="main_menu clearfix">
                <li class="@if(Route::currentRouteName() == 'home') active @endif"><a class="page-scroll" href="{{ url(getLocal().'/') }}">@lang('website.basic')</a></li>
                <li class="@if(Route::currentRouteName() == 'inner_page')active  @endif"><a class="page_scroll" href="{{ url(getLocal().'/inner-page') }}"> @lang('website.local news')</a></li>
                <li class="@if(Route::currentRouteName() == 'global_page') active @endif"><a class="page_scroll" href="{{ url(getLocal().'/global-page') }}"> @lang('website.globalandArabic ') </a></li>
                <li class="dropdown">
                    <a class="page-scroll dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="true"> @lang('website.sport others') </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 45px);">
                        @foreach($sports as $sport)
                        <li class="@if(Route::currentRouteName() == 'sports') active @endif"><a class="dropdown-item page-scroll" href="{{url(getLocal().'/sports/'.@$sport->id)}}">{{ @$sport->sport_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="@if(Route::currentRouteName() == 'error') active @endif"><a class="page-scroll" href="{{ url(getLocal().'/error') }}">  @lang('website.matches')</a></li>
                <li class="@if(Route::currentRouteName() == 'media') active @endif"><a class="page-scroll" href="{{ url(getLocal().'/media') }}"> @lang('website.videoes')</a></li>
                <li class="@if(Route::currentRouteName() == 'opinions') active @endif"><a class="page-scroll" href="{{ url(getLocal().'/opinions') }}"> @lang('website.articles and opinions')</a></li>
                
                

            </ul>
            <form role="search" class="form-search" action="{{ url(getLocal().'/search') }}" method="get">
                <div class="form-group">
                    <input type="text" name="q"  class="form-control" placeholder="يبحث عن"/>
                    <button class="btn-search">
                        <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26">
                          <path id="Path_1" data-name="Path 1" d="M11.45,0A11.45,11.45,0,1,0,22.9,11.45,11.463,11.463,0,0,0,11.45,0Zm0,20.786a9.336,9.336,0,1,1,9.336-9.336A9.347,9.347,0,0,1,11.45,20.786Z" fill="#afafaf"/>
                          <path id="Path_2" data-name="Path 2" d="M358.909,357.415l-6.06-6.06a1.057,1.057,0,1,0-1.494,1.494l6.06,6.06a1.057,1.057,0,1,0,1.494-1.494Z" transform="translate(-333.219 -333.219)" fill="#afafaf"/>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="opt-mobail">
                <button type="button" class="hamburger">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </div>
</header>