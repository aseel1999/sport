
        @extends('layout.opinionLayout')
        @section('content')
        
                    <div class="col-lg-8">
                        <div class="content-inner">
                            <div class="head-details hd-op">
                                <h2>{{ $opinion->title }}</h2>
                                <div class="author-name">
                                    <figure><img src="{{@$opinion->image  }}" alt="" /></figure>
                                    <div class="txt-author">
                                        <p>{{ $opinion->name_author }}</p>
                                        <ul>
                                            <li><span>{{ $opinion->created_at->translatedFormat('l j F Y') }}</span></li>
                                            <li><span><i class="fa-solid fa-bookmark"></i> {{ $opinion->created_at->diffForHumans()}} </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="cont-details">
                                <div class="txt-details">
                                    <p>{{ $opinion->detail }}</p>
	      
                                </div>
                                <div class="cont-share">
                                  <p>@lang('website.share article')</p>
                                    <a class="btn-share"><span>@lang('website.share')</span> <i class="fa-solid fa-share-nodes"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="related-topics">
                            <div class="sec_head">
                                <h2>@lang('website.retlated topics')</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @foreach($articles as $article)
                                    <div class="item-ds-news">
                                        <figure><img src="{{ $article->image }}" alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href="{{url(getLocal().'/news/'.@$article->id.'/details')}}">{{ $article->title }}</a></h6>
                                            <span><i class="fa-solid fa-calendar-days"></i>  {{$article->created_at->translatedFormat('l j F Y')}}</span>
                                        </div>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
               
        
       
        
        
      

   @endsection
    
    