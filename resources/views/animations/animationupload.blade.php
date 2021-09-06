@extends('layouts.vendor')

@section('content')
<div class="container-fluid indmain2">
  <span class="uploadp">< My Lottie Animations</span>
<h1 class="indmainh1 mt-2">Upload Lottie
</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 uploadleftdiv">
      <h5 class="cashousp1 text-black font-weight-bold">File type required</h5>
      <p class="uploadp">Below are the file types which required for each Lottie files</p>
      <div class="row ml-1">
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">JSON</button>    
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">AEP</button>
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">ZIP</button><br>
          <p class="uploadopt">Optional</p>   
        </div>
 
      </div>
 
            <h5 class="cashousp1 text-black font-weight-bold">File naming</h5>
      <p class="uploadp">Please follow below file names to group in once assets during upload</p>
      <div class="uplleftlis">
        <img src="assets/images/upt.svg" alt=""><span class="uploadp ml-3">  My_lottie.json</span>
      </div>
      <div class="uplleftlis">
        <img src="assets/images/upt.svg" alt=""><span class="uploadp ml-3">  My_lottie.aep</span>
      </div>
       <div class="uplleftlis">
        <img src="assets/images/upt.svg" alt=""><span class="uploadp ml-3">  My_lottie.zip</span>
      </div>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 uploadrightdiv">
      <div class="uplrin text-center">
      <label class="filelabel">
    <h2>➕</h2><br>
    <span class="uploadp mt-2">
        Click or Drag and Drop to <br> upload 3ds
    </span>
    <input style="display: none;" id="FileInput" name="booking_attachment" type="file"/>
</label>
    </div>
  </div>
</div>
</div>

<!-- /container -->

    @endsection