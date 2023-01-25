<header id="header">
    <div class="top-header">
        <div class="container">
            <div class="time-site d-flex align-items-center">
                <i class="fa-regular fa-clock"></i>
                <p> {{ $settings->created_at->format('Y-m-d') }} </p>
            </div>
            <ul class="list-social">
                <li><a href=""><i class="fa-solid fa-info"></i></a></li>
                <li class="list-play"><a href=""><i class="fa-solid fa-play"></i></a></li>
                <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                <li><a href=""><i class="fa-solid fa-paper-plane"></i></a></li>
                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="middle-header">
        <div class="container">
            <div class="logo-site">
                <a href="index.html">
                    <img src="{{asset('uploads/images/settings/'.$settings->app_logo)}}"alt="logo" />
                </a>
            </div>
            <div class="banner-header">
                <a href=""><img src="{{asset('uploads/images/settings/'.$settings->banner_header)}}" alt="" /></a>
            </div>
        </div>
    </div>
    <div class="bt-header">
        <div class="container">
            <ul class="main_menu clearfix">
                <li class="active"><a class="page-scroll" href="index.html">@lang('website.basic')</a></li>
                <li><a class="page-scroll" href="inner-page.html"> @lang('website.local news')</a></li>
                <li><a class="page-scroll" href="inner-page.html"> @lang('website.global and local') </a></li>
                <li><a class="page-scroll" href="inner-page.html"> @lang('website.sport others') </a></li>
                <li><a class="page-scroll" href="inner-page.html">  @lang('website.matches')</a></li>
                <li><a class="page-scroll" href="inner-page.html"> @lang('website.videoes')</a></li>
                
                

            </ul>
            <form class="form-search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="يبحث عن" />
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