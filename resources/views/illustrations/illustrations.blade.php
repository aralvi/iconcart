@extends('layouts.vendor')

@section('content')
<div class="container indmain1">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="indmainh1 ml-5">My Photos</h1>
        </div>
    </div>
    <div class="row">
        <div class=" offset-lg-2 col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs pt-3 pr-3 pl-3">
                 <a style="text-decoration: none !important;" href="{{url('vendor/photo/upload')}}">
                     <div class="pb-4 pt-4" style="border:1px dashed black;border-radius: 12px;" >
                     <img src="assets/images/c2.PNG" alt="">
                 <h3 class="indboxh3">Upload New</h3>
                 </div>
                 </a>
             </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs">
                 <a href="{{url('vendor/photos/live-store')}}">
                    <div>
                    <img src="{{asset('assets/images/Capture.PNG')}}" alt="">
                      <h3 class="indboxh3">Live in Store</h3>
                 <p class="indboxp1">{{$photos->count()}} photos</p>
                    </div>
                 </a>
             </div>
        </div>
        <div class=" col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs">
                 <a href="{{url('vendor/photo-draft-show')}}">
                    <div>
                      <img src="{{asset('assets/images/c3.PNG')}}"  alt="">
                      <h3 class="indboxh3">Draft</h3>
                      <p class="indboxp1">{{$photos->count()}} photos</p>
                    </div>
                 </a>
             </div>
        </div>
    </div>
    <div class="row">
        <div class=" offset-lg-2 col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs">
                 <a href="{{url('vendor/photos/review')}}">
                    <div>
                      <img src="{{asset('assets/images/c4.PNG')}}"  alt="">
                        <h3 class="indboxh3">Under Review</h3>
                         <p class="indboxp1">{{$reviews->count()}} photos</p>
                    </div>
                 </a>
             </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs">
                <a href="{{url('vendor/photos/needtoimprove')}}">
                    <div>
                      <img src="{{asset('assets/images/c4.PNG')}}"  alt="">
                        <h3 class="indboxh3">Need to Improve</h3>
                         <p class="indboxp1">{{$photos->count()}} photos</p>
                    </div>
                 </a>
             </div>
        </div>
        <div class=" col-lg-3  col-md-6 col-sm-12 col-12">
             <div class="indboxs">
             <a href="{{url('vendor/photos/rejected')}}">
                    <div>
                      <img src="{{asset('assets/images/c6.PNG')}}"  alt="">
                        <h3 class="indboxh3">Rejected</h3>
                         <p class="indboxp1">{{$photos->count()}} photos</p>
                    </div>
                 </a>
             </div>
        </div>
    </div>

</div>

</div>

<!-- /container -->
@endsection