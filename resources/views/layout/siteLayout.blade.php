<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{$setting->title}}</title>
    <!-- Stylesheets -->
    <link rel="icon" href="{{url('website/images/favicon.svg')}}">
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet">
    @if(getLocal()=='ar')
        <link href="{{url('website/css/rtl.css')}}" rel="stylesheet">
    @endif
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <script src="{{asset('website/js/jquery-3.2.1.min.js')}}"></script>
    @yield('css')
</head>
<body>

<div class="main-wrapper">

    <header id="header">
        <div class="container">
            <div class="logo-site">
                <a href="{{url(getLocal())}}">
                    <img class="logo-web" src="{{url('website/images/logo.svg')}}" alt="" />
                    <img class="logo-mobail" src="{{url('website/images/Logo-mobail.svg')}}" alt="" />
                </a>
            </div>
            <ul class="main_menu clearfix">
                <li class="{{Route::currentRouteName()=='home' ? "active" : ''}}" ><a class="page-scroll" href="{{url(getLocal())}}">@lang('website.home')</a></li>
                
                <!--<li class="#">@lang('website.categories')</a></li>
                <li class="#" ><a class="page-scroll" href="#">@lang('website.our_projects')</a></li>
                <li class="#" ><a class="page-scroll" href="">@lang('website.contact_us')</a></li>-->
                @if(getLocal()=='ar')
                    <li class="lang-site"><a href="{{LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="page-scroll"><span>English</span></a></li>
                @else
                    <li class="lang-site"><a href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="page-scroll"><span>العربية</span></a></li>
                @endif
            </ul>
            <div class="opt-mobail">
                @if(getLocal()=='ar')
                    <li class="lang-site"><a href="{{LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="page-scroll"><span>English</span></a></li>
                @else
                    <li class="lang-site"><a href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" class="page-scroll"><span>العربية</span></a></li>
                @endif
                    <button type="button" class="hamburger">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </header>
    <!--header-->
    @if (session('success'))
        <alert class="alert alert-success" style="display: block">
            <span style="display: block">{{session('success')}}</span>
        </alert>
    @endif
    @yield('content')

    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cont-ft wow fadeInUp">
                            <figure class="logo-ft wow fadeInUp">
                                <img src="{{url('website/images/logo-ft.svg')}}" alt="Logo" class="img-fluid">
                            </figure>
                            <a href="{{$setting->instagram}}" target="_blank" class="btn-site"><span><i class="fa-brands fa-instagram"></i> {{$setting->instagram_name}}</span></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="menu-ft">
                            <h5>@lang('website.company')</h5>
                            <ul class="li-ft wow fadeInUp">
                                <li><a href="#">@lang('website.about_us')</a></li>
                                <li><a href="#">@lang('website.terms_conditions')</a></li>
                                <li><a href="#">@lang('website.privacy_policy')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="menu-ft">
                            <h5>@lang('website.contact_us')</h5>
                            <ul class="list-contact wow fadeInUp">
                                <li><a href="tel:+{{$setting->mobile}}"><i class="fa-solid fa-phone"></i> +{{$setting->mobile}}</a></li>
                                <li><a href="mailto:{{$setting->info_email}}"><i class="fa-solid fa-envelope"></i> {{$setting->info_email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-ft">
            <div class="container">
                <div class="cont-bt">
                    <p class="copyRight wow fadeInUp">@lang('website.copyright') {{date('Y')}}</p>
                    <p>@lang('website.powered_by') <a href="https://linekw.com/">@lang('website.line')</a></p>
                </div>

            </div>
        </div>
    </footer>
    <!--footer-->

    <div class="contact-whats">
        <a  href="{{$setting->whatsApp}}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    </div>

</div>
<!--main-wrapper-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/all.min.js')}}"></script>
<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('website/js/wow.js')}}"></script>
<script src="{{asset('website/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('website/js/script.js')}}"></script>
<script>
    new WOW().init();
</script>
<script>
    $("#mobile,#phone,#paginate").on("input", function(evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9\.]/g, ''));
        if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
        {
            evt.preventDefault();
        }
    });
</script>
@yield('js')
@yield('script')

</body>
</html>
