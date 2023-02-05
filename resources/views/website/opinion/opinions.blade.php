@extends('layout.opinionLayout')
        @section('content')
                    <div class="col-lg-8">
                        <div class="content-opinions">
                            <div class="row">
                                @foreach($opinions as $opinion )
                                <div class="col-lg-4">
                                    <a class="item-opinion" href="{{url(getLocal().'/opinion-details/'.@$opinion->id)}}">
                                        <figure><img src="{{ $opinion->image }}" alt="" /></figure>
                                        <p>{{ $opinion->name_author }}</p>
                                    </a>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
    
    @endsection
       
       

    
    <!--main-wrapper-->
    