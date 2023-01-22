<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Sarmad</title>
    <!-- Stylesheets -->
    <link rel="icon" href="images/favicon.svg">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
</head>

<body>

    <div class="main-wrapper">

        <header id="header">
            <div class="top-header">
                <div class="container">
                    <div class="time-site d-flex align-items-center">
                        <i class="fa-regular fa-clock"></i>
                        <p>{{ $landing_pages->day }}</p>
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
                            <img src="{{asset($landing_pages->logo)}}" alt="" />
                        </a>
                    </div>
                    <div class="banner-header">
                        <a href=""><img src="{{asset($landing_pages->banner_headerr)}}" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="bt-header">
                <div class="container">
                    <ul class="main_menu clearfix">
                        <li class="active"><a class="page-scroll" href="index.html">{{ $landing_pages->basic }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category1 }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category2 }}</li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category3 }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category4 }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category5 }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category6 }}</a></li>
                        <li><a class="page-scroll" href="inner-page.html">{{ $landing_paages->category7 }}</a></li>
                        <li><a class="page-scroll" href="videos.html"></a>{{ $landing_paages->medias }}</li>
                        <li><a class="page-scroll" href="infografic.html">{{ $landing_paages->infographics }}</a></li>
                        <li><a class="page-scroll" href="opinions.html"></a>{{ $landing_paages->opinions }}</li>
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
                        <div class="search-mb"><a href="" class="page-scroll"><i class="fa-solid fa-magnifying-glass"></i></a></div>
                        <button type="button" class="hamburger">
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="head-news">
                <div class="container">
                    <div class="ph-news">
                        <span>عاجل</span>
                        <p>{{ $landing_pages->new }}</p>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->
        
        <main>
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <section class="section_shome">
                            <div class="big-news">
                                <figure><img src="{{asset($landing_pages->noon)}}" alt="" /></figure>
                                <div class="txt-big-news">
                                    <h4><a href="details.html"></a></h4>
                                    <p>{{ $landing_page->explain1 }}</p>
                                </div>
                            </div>
                        </section>
                        <!--section_home-->
                        
                        <section class="section_sweeteners">
                            <div class="sec_head">
                                <h2></h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="big-news">
                                        <figure><img src="{{asset($landing_pages->noon)}}" alt="" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="details.html">{{ asset($landing_pages->mahali) }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    
                                    <div class="cont-ds-news">
                                        @foreach($articles as $article)
                                        <div class="item-ds-news">
                                            <figure><img src="{{ asset($landing_pages->noon1) }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">{{ $article->title }}</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> {{ $landing_pages->day }}</span>
                                                <p>{{ $article->description }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section_sweeteners-->
                        
                        <section class="section_two_artic">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>{{ $landing_page->category2 }}</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="{{ asset($landing_pages->art1) }}" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">{{ $landing_pages->subtitle }}</a></h4>
                                                <span>{{ $landing_pages->day }}</span>
                                                <p>{{ $landing_pages->pararaph }}</p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            <div class="item-ds-news">
                                                <figure><img src="images/v1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/v2.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/n1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>أمن ومحاكم</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="images/art2.png" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد </a></h4>
                                                <span>الخميس 9 ديسمبر 2021</span>
                                                <p>كن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل </p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            <div class="item-ds-news">
                                                <figure><img src="images/v1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/v2.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/n1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </section>
                        
                        <section class="section_other_news">
                            <div class="sec_head">
                                <h2>عرب وعالم</h2>
                            </div>
                            <div class="other-news">
                                <div class="big--other--news">
                                    <div class="item-ds-news">
                                        <figure><img src="images/v1.png" alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                            <span> الخميس 9 ديسمبر 2021</span>
                                            <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n-3.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/v1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n-3.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <section class="section_two_artic pd-40">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>اقتصاد</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="images/11.png" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">لكن لا بد أن أوضح لك أن كل هذه الأفكار </a></h4>
                                                <span>الخميس 9 ديسمبر 2021</span>
                                                <p>كن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل </p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            <div class="item-ds-news">
                                                <figure><img src="images/n1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/n1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/n1.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>رياضة</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="images/v2.png" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="">لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد </a></h4>
                                                <span>الخميس 9 ديسمبر 2021</span>
                                                <p>كن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار  النشوة وتمجيد الألم نشأت بالفعل، وسأعرض لك التفاصيل </p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            <div class="item-ds-news">
                                                <figure><img src="images/v2.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/v2.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                            <div class="item-ds-news">
                                                <figure><img src="images/v2.png" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                    <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        <section class="section_other_news">
                            <div class="sec_head">
                                <h2>منوعات</h2>
                            </div>
                            <div class="other-news">
                                <div class="big--other--news">
                                    <div class="item-ds-news">
                                        <figure><img src="images/22.png" alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                            <span> الخميس 9 ديسمبر 2021</span>
                                            <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/21.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/21.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/21.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="images/21.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                    <aside class="col-lg-4">
                        <div class="cont-video-aside">
                            <div class="top-video">
                                <div class="item-video">
                                    <figure><img src="images/v1.png" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار</p>
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="item-video">
                                    <figure><img src="images/v2.png" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار</p>
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                                <div class="item-video">
                                    <figure><img src="images/v2.png" alt="" /></figure>
                                    <div class="txt-video">
                                        <p>لكن لا بد أن أوضح لك أن كل هذه الأفكار المغلوطة حول استنكار</p>
                                    </div>
                                    <a href="" class="btn-play"><i class="fa-solid fa-circle-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="cont-ad">
                            <a href=""><img src="images/ad.png" alt="" /></a>
                        </div>
                        <div class="weather-card">
<!--
                            <div id="current" class="wrapper">
                                <nav>
                                    <button id="locateBtn">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </button>
                                    <button id="unitBtn" data-units="f">f</button>
                                </nav>
                                <h1 class="location">Chicago, IL</h1>
                                <h2 class="date">Sunday, January 1, 2017</h2>
                                <div class="weatherIcon">
                                    <div class="sunny">
                                        <div class="inner"></div>
                                    </div>
                                </div>
                                <p class="temp">72</p>
                                <p class="conditions">Sunny</p>
                            </div>
                             Future Forecast 
                            <div id="future" class="wrapper">
                                <div class="container">
                                    <h3 class="day">Mon</h3>
                                    <div class="weatherIcon">
                                        <div class="partlycloudy">
                                            <div class="inner"></div>
                                        </div>
                                    </div>
                                    <p class="conditions">Partly Cloudy</p>
                                    <p class="tempRange"><span class="high">64</span> | <span class="low">48</span></p>
                                </div>
                                <div class="container">
                                    <h3 class="day">Tue</h3>
                                    <div class="weatherIcon">
                                        <div class="mostlycloudy">
                                            <div class="inner"></div>
                                        </div>
                                    </div>
                                    <p class="conditions">Mostly Cloudy</p>
                                    <p class="tempRange"><span class="high">57</span> | <span class="low">45</span></p>
                                </div>
                                <div class="container">
                                    <h3 class="day">Wed</h3>
                                    <div class="weatherIcon">
                                        <div class="rain">
                                            <div class="inner"></div>
                                        </div>
                                    </div>
                                    <p class="conditions">Chance of Rain</p>
                                    <p class="tempRange"><span class="high">63</span> | <span class="low">59</span></p>
                                </div>
                            </div>
-->
                        </div>
                        <div class="latest-news">
                            <div class="sec_head">
                                <h2>آخر الأخبار</h2>
                            </div>
                            <div class="cont-ds-news">
                                @foreach($articles as $article)
                                <div class="item-ds-news">
                                    <figure><img src="{{ asset($article->detail->image) }}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html"></a>{{$article->title }}</h6>
                                        <span><i class="fa-solid fa-calendar-days"></i>{{ $article->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside-most-read">
                            <div class="sec_head">
                                <h2>الأكثر قراءة</h2>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="today-tab" data-bs-toggle="tab" data-bs-target="#today-tab-pane" type="button" role="tab" aria-controls="today-tab-pane" aria-selected="true">يومي</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week-tab-pane" type="button" role="tab" aria-controls="week-tab-pane" aria-selected="false">إسبوعي</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="today-tab-pane" role="tabpanel" aria-labelledby="today-tab" tabindex="0">
                                    <div class="cont-ds-news">
                                        @foreach($articles->where('views','>','3') as $article)
                                        
                                        
                                        <div class="item-ds-news">
                                            <figure><img src="{{ asset($article->details->image) }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html"></a>{{ $article->subtitle }}</h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> {{ $article->created_at }}</span>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="week-tab-pane" role="tabpanel" aria-labelledby="week-tab" tabindex="0">
                                    <div class="cont-ds-news">
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                        <div class="item-ds-news">
                                            <figure><img src="images/n1.png" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="details.html">حذّرت شركة الأدوية الأمريكية «موديرنا»،</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-opinions">
                            <div class="sec_head">
                                <h2>آراء</h2>
                            </div>
                            <div class="cont-ds-news">
                                @foreach($opinion_details as $opinion)
                                
                                <div class="item-ds-news">
                                    <figure><img src="images/op.png" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="details.html"></a>{{ $opinion->opinion }}</h6>
                                        <small>{{ $opinion->user->name }}</small>
                                        <span><i class="fa-solid fa-calendar-days"></i> الخميس 9 ديسمبر 2021</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="cont-instagram">
                            <div class="sec_head">
                                <h2>انستغرام</h2>
                                <span><i class="fa-brands fa-instagram"></i></span>
                            </div>
                            <div class="insta-feed-inner-wrap">
                                <div class="insta-feed-top d-flex align-items-center">
                                    <div class="insta-feed-authore"> <img src="images/insta1.png" alt="" /> </div>
                                    <div class="insta-feed-authore-info">
                                        <h4>حذّرت شركة الأدوية الأمريكية</h4> 
                                        <span class="user-name">حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال </span>
                                    </div>
                                </div>
                                <div class="insta-feed__gal_item">
                                    <ul class="d-flex">
                                        <li>
                                            <a href="">
                                                <img src="images/insta1.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/insta.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/insta1.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/insta.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/insta1.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/insta.png" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flowbtn"> 
                                    <a target="_blank" href="http://instagram.com"><i aria-hidden="true" class="fab fa-instagram"></i> تابعنا</a> 
                                </div>
                            </div>
                        </div>
                        <div class="cont-twitter">
                            <div class="sec_head">
                                <h2>تويتر</h2>
                            </div>
                            <div class="iframe-twitter">
                                <a class="twitter-timeline" href="https://twitter.com/Sarmad?ref_src=twsrc%5Etfw">Tweets by Sarmad</a> 
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        
        <section class="section_infografic">
            <div class="container">
                <div class="sec_head">
                    <h2>انفوجراف</h2>
                </div>
                <div class="row-info">
                    <div class="item-info">
                        <figure><img src="images/n.png" alt="" /></figure>
                    </div>
                    <div class="item-info">
                        <figure><img src="images/n.png" alt="" /></figure>
                    </div>
                    <div class="item-info">
                        <figure><img src="images/n.png" alt="" /></figure>
                    </div>
                </div>
                <div class="view-more">
                    <a href="">View All</a>
                </div>
            </div>
        </section>

        
        <footer id="footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="menu-ft">
                                <h5>روابط سريعة</h5>
                                <ul class="li-ft wow fadeInUp">
                                    <li><a href="index.html">الرئيسية</a></li>
                                    <li><a href="privacy.html">سياسة الخصوصية</a></li>
                                    <li><a href="about.html">من نحن</a></li>
                                    <li><a href="contact.html">إتصل بنا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="menu-ft">
                                <h5>حمّل تطبيق سرمد</h5>
                                <ul class="list-contact wow fadeInUp">
                                    <li><a href=""><img src="images/google-play.png" alt="" /></a></li>
                                    <li><a href=""><img src="images/app-store.png" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="menu-ft">
                                <h5>تواصل معنا</h5>
                                <ul class="list-contact wow fadeInUp">
                                    <li><a href="tel:+965 99887766"> +965 - 12345678</a></li>
                                    <li><a href="mailto:info@almaseelah.com"> info@sarmad.com</a></li>
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
                        <div class="col-lg-3">
                            <div class="cont-ft wow fadeInUp">
                                <h5>عن سرمد</h5>
                                <p>حذّرت شركة الأدوية الأمريكية «موديرنا»، من احتمال الإصابة بسلالتي فيروس كورونا «دلتا» و«أميكرون» في الوقت نفسه، وأوضحت أن ذلك من شأنه أن يؤدي إلى تطور الفيروس وخلق متحور جديد.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-ft">
                <div class="container">
                    <div class="cont-bt">
                        <p>تصميم و برمجة<a href="https://linekw.com/"> شركة لاين</a></p>
                        <p class="copyRight wow fadeInUp">© حقوق الطبع والنشر 2022 ، جميع الحقوق محفوظة سرمد</p>
                    </div>

                </div>
            </div>
        </footer>
        <!--footer-->

    </div>
    <!--main-wrapper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{ asset('web/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('web/js/all.min.js')}}"></script>
    <script src="{{ asset('web/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('web/js/wow.js')}}"></script>
    <script src="{{ asset('web/js/jquery.easing.min.js')}}"></script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{ asset('web/js/script.js')}}"></script>
    <script>
        new WOW().init();
    </script>


</body>

</html>