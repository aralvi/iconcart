@extends('layouts.vendor')

@section('content')
<div class="container-fluid indmain2">
  <span class="uploadp">< My Vectors</span>
<h1 class="indmainh1 mt-2">Upload Vectors</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 uploadleftdiv">
      <h5 class="cashousp1 text-black font-weight-bold">File type required</h5>
      <p class="uploadp">Below are the file types which required for each vectors files</p>
      <div class="row ml-1">
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">SVG</button>    
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">PNG</button>    
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">EPS</button>    
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">AI</button>    
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 uploadrightdiv">
      <div class="uplrin text-center">
      <form action="{{ route('vectors.drafts') }}" method="POST" enctype="multipart/form-data" id="image-upload" >
            @csrf
            <!-- <div>
            <h2>➕</h2><br>
            <span class="uploadp mt-2">
            </span>
            </div> -->
            <input type="file" name="vector">
            <button type="submit" class="btn btn-sm btn-success">Upload</button>
        </form>
    </div>
  </div>
</div>
</div>

<!-- /container -->

@endsection