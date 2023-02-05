<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">
    @include('admin.layouts.head')
<body>
@php
           $newws =App\Models\Article::where('views','>=','5')->take(4)->get();
        $last_news=App\Models\Article::orderBy('id', 'desc')->take(5)->get();
        $video =App\Models\Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=App\Models\Video::orderBy('id', 'desc')->take(2)->get();
        $opinions=App\Models\Opinion::orderBy('id','desc')->take(4)->get();
@endphp
<div class="main-wrapper">
    @include('admin.layouts.header')
    
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
@yield('js')
@yield('script')

</body>
</html>
