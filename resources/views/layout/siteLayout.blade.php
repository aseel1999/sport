<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title> سرمد</title>
        <!-- Stylesheets -->
        <link rel="icon" href="{{url('web/image/favicon.svg')}}">
        <link href="{{url('web/css/style.css')}}" rel="stylesheet">
        <!-- Responsive -->
        <link href="{{url('web/css/responsive.css')}}" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        <script src="{{url('web/js/jquery-3.2.1.min.js')}}"></script>
        @yield('css')
    </head>
<body>
@php
           $newws =App\Models\Article::where('views','>=','5')->take(4)->get();
        $last_news=App\Models\Article::orderBy('id', 'desc')->take(5)->get();
        $video =App\Models\Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=App\Models\Video::orderBy('id', 'desc')->take(2)->get();
        $opinions=App\Models\Opinion::orderBy('id','desc')->take(4)->get();
@endphp
<div class="main-wrapper">
    <header id="header">
        <div class="top-header">
            <div class="container">
                <div class="time-site d-flex align-items-center">
                    <i class="fa-regular fa-clock"></i>
                    <p>  {{$setting->created_at->translatedFormat('l j F Y')}}</p>
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
                    <a href="{{ url(getLocal().'/') }}">
                        <img src="{{asset('uploads/images/settings/'.$setting->app_logo)}}"alt="logo" />
                    </a>
                </div>
                <div class="banner-header">
                    <a href=""><img src="{{asset('uploads/images/settings/'.$setting->banner_header)}}" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="bt-header">
            <div class="container">
                <ul class="main_menu clearfix">
                    <li ><a class="page-scroll" href="{{ url(getLocal().'/') }}">@lang('website.basic')</a></li>
                    <li class="active"><a class="page-scroll" href="{{ url(getLocal().'/inner-page') }}"> @lang('website.local news')</a></li>
                    <li><a class="page-scroll" href="{{ url(getLocal().'/inner-page') }}"> @lang('website.global and local') </a></li>
                    <li class="dropdown">
                        <a class="page-scroll dropdown-toggle " id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="true"> @lang('website.sport others') </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 45px);">
                            <li><a class="dropdown-item page-scroll" href="overview.html">@lang('website.basketball')</a></li>
                            <li><a class="dropdown-item page-scroll" href="chairmen.html">@lang('website.volleyball')</a></li>
                            <li><a class="dropdown-item page-scroll" href="values.html">@lang('website.handball')</a></li>
                            <li><a class="dropdown-item page-scroll" href="vision.html">@lang('website.tennis')</a></li>
                            <li><a class="dropdown-item page-scroll" href="board-members.html">@lang('website.others')</a></li>
                        </ul>
                    </li>
                    <li><a class="page-scroll" href="{{ url(getLocal().'/inner-page') }}">  @lang('website.matches')</a></li>
                    <li><a class="page-scroll" href="{{ url(getLocal().'/inner-page') }}"> @lang('website.videoes')</a></li>
                    <li><a class="page-scroll" href="{{ url(getLocal().'/inner-page') }}"> @lang('website.articles and opinions')</a></li>
                    
                    
    
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
    
    <!--header-->
    <main>
        <div class="container">
            <div class="row">
            @yield('content')
            <aside class="col-lg-4">
                <div class="cont-video-aside">
                    <div class="top-video">
                        <div class="item-video">
                            <figure><img src="{{asset($video->image)}}" alt="" /></figure>
                            <div class="txt-video">
                                <p>{{ $video->name_video }}</p>
                            </div>
                            <a  data-fancybox-plyr href="{{ $video->url }}" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                        </div>
                    </div>
                   
                    <div class="d-flex">
                        @foreach($videoes as $one)
                        <div class="item-video">
                            <a data-fancybox-plyr href="{{ $one->url }}"><img src="{{asset($one->image)}}" alt="" /></a>
                            <div class="txt-video">
                                <p>{{ $one->name_video }}</p>
                            </div>
                            <a data-fancybox-plyr href="{{ $one->url }}" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="cont-ad">
                    <a href=""><img src="{{asset('uploads/images/settings/'.$settings->ad)}}" alt="" /></a>
                </div>
                <div class="aside-most-read">
                    <div class="sec_head">
                        <h2> @lang('website.most_read')</h2>
                    </div>
                    <div class="cont-ds-news">
                        @foreach($newws as $neww)
                        <div class="item-ds-news">
                            <figure><img src="{{@$neww->image}}" alt="11" /></figure>
                            <div class="txt-ds-news">
                                <h6><a href="{{url(getLocal().'/news/'.@$neww->id.'/details')}}">{{ @$neww->title }}  </a></h6>
                                <span><i class="fa-solid fa-calendar-days"></i>  {{ $neww->created_at->translatedFormat('l j F Y') }} </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </aside>
            </div>
           
        </div>

   </main>
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cont-ft wow fadeInUp">
                            <h5>@lang('website.about_us')</h5>
                            <p>{{ $setting->about }}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="menu-ft">
                            <h5>@lang('website.FastUrls')</h5>
                            <ul class="li-ft wow fadeInUp">
                                <li><a href="{{ url(getLocal().'/') }}">@lang('website.basic')</a></li>
                                <li><a href="{{ url(getLocal().'/privacy') }}">@lang('website.privacy_policy')</a></li>
                                <li><a href="{{ url(getLocal().'/about') }}">@lang('website.about_us')</a></li>
                                <li><a href="{{ url(getLocal().'/contact-us') }}"> @lang('website.contact_us')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="menu-ft">
                            <h5> @lang('website.contact_us')</h5>
                            <ul class="list-contact wow fadeInUp">
                                <li><a href="tel:+965 99887766"> {{ $setting->mobile }}</a></li>
                                <li><a href="mailto:info@almaseelah.com"> {{ $setting->info_email }}</a></li>
                            </ul>
                            <ul class="list-social">
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
                </div>
            </div>
        </div>
        <div class="bottom-ft">
            <div class="container">
                <div class="cont-bt">
                    <p>@lang('website.powered_by')<a href="https://hexacit.com/">  {{ 'Hexa' }}</a></p>
                    <p class="copyRight wow fadeInUp">@lang('website.copyright') {{date('Y')}}</p
                </div>
    
            </div>
        </div>
    </footer>
    <!--footer-->

    

</div>
<!--main-wrapper-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ url('web/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('web/js/all.min.js') }}"></script>
    <script src="{{ url('web/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('web/js/wow.js') }}"></script>
    <script src="{{ url('web/js/jquery.easing.min.js') }}"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ url('web/js/script.js') }}"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        new WOW().init();

        Fancybox.bind("[data-fancybox-plyr]", {
  on: {
    reveal: (fancybox, slide) => {
      if (typeof Plyr === undefined) {
        return;
      }

      let $el;

      if (slide.type === "html5video") {
        $el = slide.$content.querySelector("video");
      } else if (slide.type === "video") {
        $el = document.createElement("div");
        $el.classList.add("plyr__video-embed");

        $el.appendChild(slide.$iframe);

        slide.$content.appendChild($el);
      }

      if ($el) {
        slide.player = new Plyr($el);
      }
    },
    "Carousel.unselectSlide": (fancybox, carousel, slide) => {
      if (slide.player) {
        slide.player.pause();
      }
    },
    "Carousel.selectSlide": (fancybox, carousel, slide) => {
      if (slide.player) {
        slide.player.play();
      }
    },
  },
});

    </script>
@yield('js')
@yield('script')

</body>
</html>
