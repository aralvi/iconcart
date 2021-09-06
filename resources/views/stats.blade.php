@extends('layouts.vendor')

@section('content')
<div class="container-fluid indmain2">
<div class="tabvcvc">
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item" style="width: 50%;">
<a class=" active btn btn-block" data-toggle="tab" href="#tabs-1" role="tab">sales activities</a>
</li>
<li class="nav-item" style="width: 50%;">
<a class=" btn btn-block" data-toggle="tab" href="#tabs-2" role="tab">sales overview</a>
</li>

</ul><!-- Tab panes -->
</div>
<div class="tab-content mt-4">
<div style="background-color: transparent;" class="tab-pane active" id="tabs-1" role="tabpanel">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
  <h1 class="indmainh1">Sales Activities</h1>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 slaesalignweb">
  <span><input id="date1"  type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"> To <input id="date2" type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"></span>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 slaesalignmbl">
  <span><input id="date1"  type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"> <br> To <br> <input id="date2" type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"></span>
</div>
<div class="col-lg-12 mt-4">
  <table class="table table-hover border" >
    <thead style="background-color: #FAFAFC">
      <tr>
        <th class="tabacthead">IMAGE</th>
        <th class="tabacthead">DATE & TIME </th>
        <th class="tabacthead">EARNING</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Formula</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Ticket</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Time</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg"  src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Dinosour</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Investment</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Lift</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Graph</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Calender</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Dart</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
      <tr>
        <td>
          <img class="tabsalimg" src="{{asset('assets/images/s1.png')}}">
            <span class="tabsalicna">Dollar</span> <br>
          <a class="tabsalicnaa" href="">view</a>
        </td>
        <td class="tabsalicna">2021-06-014 06:43:37</td>
        <td class="tabsalicna">Free Download</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<div style="background-color: transparent;" class="tab-pane" id="tabs-2" role="tabpanel">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
  <h1 class="indmainh1">Sales Activities</h1>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 slaesalignweb">
  <span><input id="date1"  type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"> To <input id="date2" type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"></span>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 slaesalignmbl">
  <span><input id="date1"  type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"> <br> To <br> <input id="date2" type="date" value="2017-01-01" min="2005-01-01" max="2019-01-01"></span>
</div>
<div class="col-lg-12 salovervdiv shadow-sm mt-4">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 mt-2 text-center">
      <h1 class="indmainh1" style="color: #55afe7!important;">$263</h1>
      <span class="tabsalicna">Direct Sales</span>
      <p class="saloverpa mt-2">212 items</p>
    </div>
    <div class="mt-2 col-lg-4 col-md-4 col-sm-12 text-center">
      <h1 class="indmainh1" style="color: #e7b549!important">$986</h1>
      <span class="tabsalicna">Subscription Sales</span>
      <p class="saloverpa mt-2">5837 items</p>
    </div>
    <div class="mt-2 col-lg-4 col-md-4 col-sm-12 text-center">
      <h1 class="indmainh1" style="color: #24a8af!important">$1184</h1>
      <span class="tabsalicna">Total sales</span>
    </div>
  </div>
</div>
<div class="col-lg-12 mt-4">
  <table class="table table-hover border" >
    
    <thead>
      <h5 style="border:1px solid #fafafc;margin-bottom: -10px;" class="text-center py-4">Monthly Sales</h5>
      <tr style="background-color: #FAFAFC">
        <th class="tabacthead">DATE</th>
        <th class="tabacthead">DIRECT SALES </th>
        <th class="tabacthead">SUBSCRIPTION SALES </th>
        <th class="tabacthead">EARNING </th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td class="tabsalicna">May,2021</td>
          <td class="tabsalicna">
            $42 <br><span class="scndtabin">29 items</span>
          </td>
        <td class="tabsalicna">
            $199.7 <br><span class="scndtabin">1985 items</span>
          </td>
        <td class="tabsalicna">$241.7</td>
      </tr>
      <tr>
          <td class="tabsalicna">Jun,2021</td>
          <td class="tabsalicna">
            $42 <br><span class="scndtabin">29 items</span>
          </td>
        <td class="tabsalicna">
            $199.7 <br><span class="scndtabin">1985 items</span>
          </td>
        <td class="tabsalicna">$241.7</td>
      </tr>
      <tr>
          <td class="tabsalicna">March,2021</td>
          <td class="tabsalicna">
            $42 <br><span class="scndtabin">29 items</span>
          </td>
        <td class="tabsalicna">
            $199.7 <br><span class="scndtabin">1985 items</span>
          </td>
        <td class="tabsalicna">$241.7</td>
      </tr>
      <tr>
          <td class="tabsalicna">Feb,2021</td>
          <td class="tabsalicna">
            $42 <br><span class="scndtabin">29 items</span>
          </td>
        <td class="tabsalicna">
            $199.7 <br><span class="scndtabin">1985 items</span>
          </td>
        <td class="tabsalicna">$241.7</td>
      </tr>
      <tr>
          <td class="tabsalicna">Dec,2020</td>
          <td class="tabsalicna">
            $42 <br><span class="scndtabin">29 items</span>
          </td>
        <td class="tabsalicna">
            $199.7 <br><span class="scndtabin">1985 items</span>
          </td>
        <td class="tabsalicna">$241.7</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection