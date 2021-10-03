@extends('layouts.vendor')

@section('title','Icon')

@section('content')
    <div class="container-fluid topheader-vendor">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="assets/images/iconscout-logo.color.ae9f9fd.svg" alt="">
          <span class="spantop">Contributors</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 topvend-c2">
          <a class="topvrna1" href="">Contributor Terms</a>
          <img src="assets/images/91.jpg" class="imgventop" alt="">
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="gn-menu-wrapper gn-menu-main gn-open-part">
        <div class="gn-scroller">
          <ul id="myDIV" class="gn-menu ">
            
            <li><a href="index.html" class="gn-icon fa fa-home"></a>
          </li>
          <li><a href="icon.html" class="gn-icon  fa fa-eercast"></a>
        </li>
        <li><a href="illustrations.html" class="gn-icon fa fa-ravelry"></a>
      </li>
      <li><a href="3d.html" class="gn-icon fa fa-cube"></a>
    </li>
    <li class="active"><a href="animation.html" class="gn-icon fa fa-cube"></a>
  </li>
  <li><a href="stats.html" class="gn-icon fa fa-bar-chart"></a>
</li>
<li ><a href="cashout.html" class="gn-icon fa fa-money"></a>
</li>
<li><a class="gn-icon fa fa-id-badge"></a>
</li>
<li><a href="contributorterms.html" class="gn-icon gn-icon-help"></a>
</li>

</ul>
</div>
<!-- /gn-scroller -->
</nav>
<div class="container-fluid indmain2">
<span class="uploadp">< My Icons</span><br>
<div class="row">
<div class="col-lg-7 col-md-12 col-sm-12 col-12">
<span class="indmainh1 mt-2">Rejected</span><span class="uploadp ml-3">60 Packs</span>
</div>
<div class="col-lg-5 col-md-12 col-sm-12 col-12">
<div class="row float-right">


  <div class="tabvcvc">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item" style="width: 40%;">
        <a class=" active btn btn-block" data-toggle="tab" href="#tabs-1" role="tab">Packs</a>
      </li>
      <li class="nav-item" style="width: 60%;">
        <a class=" btn btn-block" data-toggle="tab" href="#tabs-2" role="tab">individuals</a>
      </li>
      </ul><!-- Tab panes -->
    </div>
    
  </div>


</div>
</div>
<div class="row">
<div class="col-lg-12">
  <div class="tab-content mt-4">
      <div style="background-color: transparent;" class="tab-pane active" id="tabs-1" role="tabpanel">
        <div class="container-fluid">
          <p class="uploadp text-center">Rejected items will auto-removed in 7 Days.</p>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 deletediv">
              <div class="row no-gutters">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <img src="https://s3.amazonaws.com/files.iconscout.com/2019-11-29/e61132e0-9d1a-11e8-aa5b-16f546a19484/icon/cc051590-128f-11ea-b986-114022cc3a5d.svg" class="improveimg" alt="">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                      <span class="improvep1l">Photography</span>
                    </div>
                    
                  </div>
                                      <h1 class="improveh1">Reason of Rejection: Your icons don't satisfy our icon tag guidelines. Please improve your icon tags and give title that exactly defines your icon.</h1>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div style="background-color: transparent;" class="tab-pane" id="tabs-2" role="tabpanel">
        No items found
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection