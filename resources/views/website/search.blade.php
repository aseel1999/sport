@extends('layout.contactLayout')
@section('content') 
      <section class="section_infografic">
           <div class="content-inner">
               <div class="head-page">
                  <h2>@lang('website.resultofsearches'){{ $keyword }}</h2>
               </div>
                    <div class="cont-ds-news">
                       @foreach($news as $new)
                          <div class="item-ds-news">
                            <figure><img src="{{ @$new->image }}" alt="" /></figure>
                                <div class="txt-ds-news">
                                  <h6><a href="{{url(getLocal().'/news/'.@$new->id.'/details')}}">{{ $new->title }}</a></h6>
                                  <span> {{ @$new->created_at->translatedFormat('l j F Y') }}</span>
                                   <p>  {{ @$new->detail }}.</p>
                                </div>
                          </div>
                        @endforeach
                    </div>
            </div>
      </section>
   

@endsection