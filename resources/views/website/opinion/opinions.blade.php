@extends('layout.opinionLayout')
        @section('content')
        
                    <div class="col-lg-8">
                        <div class="content-opinions">
                            <div class="row">
                                @foreach($opinions as $opinion )
                                <div class="col-lg-4">
                                    <div class="item-opinion">
                                        <figure><img src="{{ $opinion->image }}" alt="" /></figure>
                                        <p>{{ $opinion->name_author }}</p>
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
    
    @endsection
       
       

    
    <!--main-wrapper-->
    