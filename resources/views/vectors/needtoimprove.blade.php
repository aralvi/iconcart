@extends('layouts.vendor')

@section('title','Icon')

@section('content')
<div class="container-fluid indmain2">
<span class="uploadp">< My Icons</span><br>
<div class="row">
<div class="col-lg-7 col-md-12 col-sm-12 col-12">
<span class="indmainh1 mt-2">Need To Improve</span><span class="uploadp ml-3">30 Packs</span>
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
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 improvediv">
              <div class="row no-gutters">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <img src="https://s3.amazonaws.com/files.iconscout.com/2019-11-29/e61132e0-9d1a-11e8-aa5b-16f546a19484/icon/cc051590-128f-11ea-b986-114022cc3a5d.svg" class="improveimg" alt="">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                      <span class="improvep1l">Photography</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                      <a class="improvel1r mr-4">Edit this pack</a>
                      <a class="improvel2r">Delete this pack</a>
                    </div>

                  </div>
                                      <h1 class="improveh1">Need to Improve: Your icons don't satisfy our icon tag guidelines. Please improve your icon tags and give title that exactly defines your icon.</h1>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 improvediv">
              <div class="row no-gutters">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                  <img src="https://s3.amazonaws.com/files.iconscout.com/2019-11-29/e61132e0-9d1a-11e8-aa5b-16f546a19484/icon/cc051590-128f-11ea-b986-114022cc3a5d.svg" class="improveimg" alt="">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                      <span class="improvep1l">Photography</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                      <span class="improvel1r mr-4">Edit this pack</span>
                      <span class="improvel2r">Delete this pack</span>
                    </div>
                     </div>
                    <h1 class="improveh1">Need to Improve: Your icons don't satisfy our icon tag guidelines. Please improve your icon tags and give title that exactly defines your icon.</h1>
                 
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