@extends('layout.opinionLayout')

@section('content')
          <div class="col-lg-8">
             <div class="content-inner">
                <div class="head-details">
                    <p> {{ $new->subtitle }}</p>
                    <h2>{{ $new->title }}  </h2>
                    <ul>
                        <li><span> {{$new->created_at->translatedFormat('l j F Y')}}</span></li>
                        <li><span><i class="fa-solid fa-bookmark"></i> {{ $new->created_at->diffForHumans() }}</span></li>
                    </ul>
                </div>              
                    <div class="cont-details">
                        <figure><img src="{{ $new->image }}" alt="" /></figure>
                                <div class="txt-details">
                                    <p>{{ $new->detail }}.</p> 
                                </div>
                                <div class="cont-share">
                                    <p>@lang('website.share article')</p>
                                    <a class="btn-share"><span>@lang('website.share')</span> <i class="fa-solid fa-share-nodes"></i></a>
                                </div>
                            
                    </div>
                        <div class="related-topics">
                            <div class="sec_head">
                                <h2>@lang('website.retlated topics')</h2>
                            </div>
                            <div class="row">
                                @foreach($articles as $article)
                                <div class="col-lg-6">
                                    <div class="item-ds-news">
                                        <figure><img src="{{ asset($article->image) }}"  alt="" /></figure>
                                        <div class="txt-ds-news">
                                            <h6><a href=""{{url(getLocal().'/news/'.@$article->id.'/details')}}">{{ $article->title }}</a></h6>
                                            <span><i class="fa-solid fa-calendar-days"></i>  {{ $article->created_at->translatedFormat('l j F Y') }}  </span>
                                        </div>
                                    </div>
                                   
                                </div>
                                @endforeach
                                
                                
                                
                                
                                

                            </div>
                        </div>
                    
                    
               
            </div>
       </div>
           
@endsection





