@extends('layouts.vendor')

@section('content')
    <div class="container-fluid cntritrmainfluid">
        <h1 class="cntritrh1">Iconscout Legal</h1>
    </div>
<div class="container-fluid cntritrmainfluid2 mt-4">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12 mb-3">
        <ul class="nav nav-pills flex-column navlinks1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Licensing" role="tab" aria-controls="home" aria-selected="true">Licensing</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="profile" aria-selected="false">Terms of Use</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="contact" aria-selected="false">Privacy Policy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#fair" role="tab" aria-controls="contact" aria-selected="false">Fair Usage Policy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contr" role="tab" aria-controls="contact" aria-selected="false">Contributor Terms</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#api" role="tab" aria-controls="contact" aria-selected="false">API License and Development Agreement</a>
  </li>
</ul>
    </div>
    <!-- /.col-md-4 -->
        <div class="col-lg-9 col-md-8 col-sm-12">
      <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" style="background-color: transparent;" id="Licensing" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">Licensing</h2>
   
  </div>
  <div class="tab-pane fade " style="background-color: transparent;" id="terms" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">Terms of Use</h2>
   
  </div>
 <div class="tab-pane fade " style="background-color: transparent;" id="privacy" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">Privacy Policy</h2>
  </div>

  <div class="tab-pane fade " style="background-color: transparent;" id="fair" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">Fair Usage Policy</h2>
  </div>

  <div class="tab-pane fade " style="background-color: transparent;" id="contr" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">Contributor Terms</h2>
  </div>

  <div class="tab-pane fade " style="background-color: transparent;" id="api" role="tabpanel" aria-labelledby="home-tab">
  <h2 class="font-weight-bold">API License and Development Agreement</h2>
  </div>

</div>
    </div>
    <!-- /.col-md-8 -->
  </div>
  
  
  
</div>
@endsection