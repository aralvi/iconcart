@extends('layouts.vendor')

@section('content')
<div class="container indmain1">
    <div class="row">
        <div class="col-lg-12 ">
            <h1 class="indmainh1">Hello!</h1>
            <h1 class="indmainh1">Vector Stall</h1>
            <p class="indmainp1">Here is the stats of all Products</p>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 ">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="indboxs">
                        <a style="text-decoration: none;" href="{{url('vendor/icon')}}">
                            <img src="assets/images/Capture.PNG" alt="">
                        <h3 class="indboxh3">Icons</h3>
                        <p class="indboxp1">{{ $icons->count() }} icons</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="indboxs">
                        <a style="text-decoration: none;" href="{{url('vendor/vector')}}">
                        <img src="assets/images/Capture.PNG" alt="">
                        <h3 class="indboxh3">Vectors</h3>
                        <p class="indboxp1">{{ $vectors->count() }} vectors</p>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="indboxs">
                        <a style="text-decoration: none;"   href="{{url('vendor/illustrations')}}">
                        <img src="assets/images/Capture.PNG" alt="">
                        <h3 class="indboxh3">Photos</h3>
                        <p class="indboxp1">{{ $photos->count() }} photos</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 webonly1">
            <div class="indboxs2">
            <div class="bgpicbox">
                <p class="indboxp2">My earning</p>
                <h1 class="indbox2h1">$248</h1>
                <p class="indboxp3">Combine Sales and Referalls</p>
                <a href="cashout.html" class="btn indbox2bt1">Request cashout</a>
            </div>            
            </div>
        </div>
        
    </div>
</div>

</div>
@endsection

 