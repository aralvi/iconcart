@extends('layouts.vendor')

@section('title','Iconupload')
@section('content')
<div class="container-fluid indmain2">
  <span class="uploadp"> My Icons</span>
<h1 class="indmainh1 mt-2">Upload Icons</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 uploadleftdiv">
      <h5 class="cashousp1 text-black font-weight-bold">File type required</h5>
      <p class="uploadp">Below are the file types which required for each icon files</p>
      <div class="row ml-1">
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">SVG</button> 
          <button class="btn uploadexmbt">PNG</button> 
          <button class="btn uploadexmbt">ICO</button> 
          <button class="btn uploadexmbt">ICNS</button> 
          <button class="btn uploadexmbt">AI</button>
          <button class="btn uploadexmbt">PDF</button>    
        </div>
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

    <div class="col-lg-4 col-md-4 col-sm-12 uploadrightdiv">
      <div class="uplrin text-center">
      <!-- <label class="filelabel">
    <h2>➕</h2><br>
    <span class="uploadp mt-2">
        Click or Drag and Drop to <br> upload Icons
    </span>
    <input style="display: none;" id="FileInput" name="booking_attachment" type="file"/>
</label> -->
        <form action="{{ route('icons.drafts') }}" method="POST" enctype="multipart/form-data" class="w-100 h-100" id="image-upload" >
            @csrf
            <!-- <div>
            <h2>➕</h2><br>
            <span class="uploadp mt-2">
            </span>
            </div> -->
            <div class="image-upload w-100 h-100">
                <label for="file-input" class="d-flex justify-content-center align-items-center w-100 h-100">
                <div>
                    <span class="h2 d-block">➕</span>
                    <div class="pt-3 w-75 m-auto">Click or Drag and Drop to upload icons</div>
                </div>
                </label>
                  <input id="file-input" name="icons_upload[]" multiple class="invisible" type="file"/>
              </div>
              <button type="submit">upload</button>
        </form>
    </div>
  </div>
</div>
</div>

<!-- /container -->
@endsection
@push('scripts')
<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>




@endpush