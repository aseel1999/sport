<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">

@include('admin.layouts.head')

<body>

    <div class="main-wrapper">

        @include('admin.layouts.header')
        <!--header-->
        
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="section_home">
                            <div class="owl-carousel" id="slider-home">
                                @foreach($post_news as $post)
                                <div class="item">
                                    <div class="big-news">
                                        <figure><img src="{{ asset(@$post->image)}}" altt="sth error" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="{{url(getLocal().'/news/'.@$post->id.'/details')}}"> {{ $post->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </section>
                        <!--section_home-->
                        
                        <section class="section_sweeteners">
                            <div class="sec_head">
                                <h2>{{ $category1->name }}</h2>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="big-news">
                                        <figure><img src="{{ asset(@$new1->image) }}" alt="77" /></figure>
                                        <div class="txt-big-news">
                                            <h4><a href="{{url(getLocal().'/news/'.@$new1->id.'/details')}}">  {{ @$new1->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="cont-ds-news">
                                        @foreach($news as $one)
                                        <div class="item-ds-news">
                                            <figure><img src="{{ @$one->image }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="{{url(getLocal().'/news/'.@$one->id.'/details')}}"> {{ $one->title }}</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i> {{ $one->created_at->translatedFormat('l j F Y') }}</span>
                                                <p>{!! @$one->detail !!}.</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--section_sweeteners-->
                        <section class="section_other_news">
                            <div class="sec_head">
                                <h2>{{ $category2->name }}</h2>
                            </div>
                            <div class="other-news">
                                <div class="big--other--news">
                                    <div class="item-ds-news">
                                        <figure><img src="{{ asset(@$new2->image) }}" alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href="{{url(getLocal().'/news/'.@$new2->id.'/details')}}" >{{ @$new2->title }}</a></h6>
                                            <span>{{ @$new2->created_at->translatedFormat('l j F Y') }} </span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($news2 as $n2)
                                    <div class="col-lg-6">
                                        <div class="item-ds-news">
                                            <figure><img src="{{ @$n2->image }}" alt="" /></figure>
                                            <div class="txt-ds-news">
                                                <h6><a href="{{url(getLocal().'/news/'.@$n2->id.'/details')}}">{{ @$n2->title }}</a></h6>
                                                <span><i class="fa-solid fa-calendar-days"></i>{{ @$n2->created_at->translatedFormat('l j F Y') }} </span>
                                                <p>{!! @$n2->detail !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <section class="section_two_artic mt-sm-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2>{{ $category3->name }}</h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="{{ @$new3->image }}" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="{{url(getLocal().'/news/'.@$new3->id.'/details')}}">  {{ @$new3->title }}</a></h4>
                                                <span> {{ @$new3->created_at->translatedFormat('l j F Y') }}  </span>
                                               <p></p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            @foreach($news3 as $n3)
                                            <div class="item-ds-news">
                                                <figure><img src="{{ @$n3->image }}" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="{{url(getLocal().'/news/'.@$n3->id.'/details')}}">{{ @$n3->title }}</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> {{ $n3->created_at->translatedFormat('l j F Y') }}</span>
                                                    <p>{!!@$n3->detail !!}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sec_head">
                                        <h2> @lang('website.sports') </h2>
                                    </div>
                                    <div class="cont-two-atr">
                                        <div class="item-cont-art">
                                            <figure><img src="{{@$sport->image}}" alt="" /></figure>
                                            <div class="txt--art">
                                                <h4><a href="{{url(getLocal().'/news/'.@$sport->id.'/details')}}">  {{ @$sport->title }}    </a></h4>
                                                <span>{{ $sport->created_at->diffForHumans()}}</span>
                                               <p></p>
                                            </div>
                                        </div>
                                        <div class="cont-ds-news">
                                            @foreach($sports as $spo)
                                            <div class="item-ds-news">
                                                <figure><img src="{{ @$spo->image }}" alt="" /></figure>
                                                <div class="txt-ds-news">
                                                    <h6><a href="{{url(getLocal().'/news/'.@$spo->id.'/details')}}">{{ @$spo->title }}</a></h6>
                                                    <span><i class="fa-solid fa-calendar-days"></i> {{ $spo->created_at->translatedFormat('l j F Y') }}</span>
                                                    <p>{!! @$spo->detail !!}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                           
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
                                    <figure><img src="{{asset(@$video->image)}}" alt="" /></figure>
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
                            <a href="{{url(getLocal().'/news/'.@$article1->id.'/details')}}"><img src="{{$setting->ad}}" alt="" /></a>
                        </div>
                        <div class="latest-news">
                            <div class="sec_head">
                                <h2>@lang('website.last_news')</h2>
                            </div>
                            <div class="cont-ds-news">
                              @foreach($last_news as $last_new)
                                <div class="item-ds-news">
                                    <figure><img src="{{@$last_new->image}}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="{{url(getLocal().'/news/'.@$last_new->id.'/details')}}"></a>{{ $last_new->title }}</h6>
                                        <span><i class="fa-solid fa-calendar-days"></i> {{ $last_new->created_at->translatedFormat('l j F Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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
                        <div class="latest-opinions">
                            <div class="sec_head">
                                <h2>@lang('website.opinions')</h2>
                            </div>
                            <div class="cont-ds-news">
                               @foreach($opinions as $opinion)
                                <div class="item-ds-news">
                                    <figure><img src="{{asset(@$opinion->image)}}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="{{url(getLocal().'/opinion-details/'.@$opinion->id)}}">{{ @$opinion->title}}</a></h6>
                                        <small> {{ @$opinion->name_author }} </small>
                                        <span><i class="fa-solid fa-calendar-days"></i> {{ $opinion->created_at->translatedFormat('l j F Y') }}</span>
                                    </div>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </main>
        
        <section class="section_infografic">
            <div class="container">
                <div class="sec_head">
                    <h2>@lang('website.Infographic')</h2>
                </div>
                <div class="row-info">
                  @foreach($infographics as $infographic)
                    <div class="item-info">
                        <figure><img src="{{asset(@$infographic->image)}}" alt="77" /></figure>
                    </div>
                    @endforeach
                    
                </div>
                <div class="view-more">
                    <a href="{{ url(getLocal().'/infographic') }}">View All</a>
                </div>
            </div>
        </section>

        @include('admin.layouts.footer')
        
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


</body>

</html>