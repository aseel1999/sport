@extends('layout.siteLayout')   
        @section('content')
                    <div class="col-lg-8">
                        <div class="content-inner">
                            <div class="head-page">
                                <h2>{{ $sport->sport_name }}</h2>
                            </div>
                            <div class="cont-ds-news">
                                @foreach($articles as $article)
                                <div class="item-ds-news">
                                    <figure><img src="{{ $article->image }}" alt="" /></figure>
                                    <div class="txt-ds-news">
                                        <h6><a href="{{url(getLocal().'/news/'.@$article->id.'/details')}}">{{ $article->title }}</a></h6>
                                        <span> {{ $article->created_at->translatedFormat('l j F Y') }}</span>
                                        <p>  {!!$article->detail !!}.</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
              
   @endsection