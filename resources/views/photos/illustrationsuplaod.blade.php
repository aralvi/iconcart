@extends('layouts.vendor')
@section('title','Photos Upload')

@section('content')
<style>

.upload {
  --text-drop: #212121;
  --text-upload: #212121;
  --progress-color: #212121;
  --check-color: var(--text-upload);
  width: 100%;
  height: 100%;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.upload::before {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  background: var(--background);
  border-radius: var(--border-radius);
  transition: all .3s ease-out;
  box-shadow: var(--shadow-x, 0px) var(--shadow-y, 1px) var(--shadow-blur, 3px) rgba(0, 0, 0, 0.1);
  -webkit-transform: scale(var(--scale, 1));
          transform: scale(var(--scale, 1));
}
.upload .drop-here {
  position: absolute;
  width: 100%;
  height: 100%;
  outline: none;
  border-radius: var(--border-radius);
  opacity: var(--opacity, 0);
  overflow: hidden;
  cursor: pointer;
  text-indent: -9999px;
  z-index: 1;
}
.upload .text {
  position: absolute;
  font-size: 21px;
  text-transform: capitalize    ;
  letter-spacing: 2px;
  font-weight: bold;
}
.upload .text.text-drop {
  color: var(--text-drop);
  opacity: var(--opacity, 1);
  transition: opacity .15s ease-out .15s;
}
.upload .text.text-upload {
  color: var(--text-upload);
  opacity: var(--opacity, 0);
  transition: opacity .15s ease-out;
}
.upload .progress-wrapper {
  position: absolute;
}
.upload .progress-wrapper .progress {
  fill: none;
  stroke: var(--progress-color);
  stroke-width: 3;
  stroke-dasharray: 722;
  stroke-dashoffset: 722;
}
.upload .check-wrapper {
  position: absolute;
  opacity: var(--opacity, 0);
  -webkit-transform: scale(var(--scale, 0.9)) rotate(var(--rotate, 3deg));
          transform: scale(var(--scale, 0.9)) rotate(var(--rotate, 3deg));
  transition: opacity .15s ease-in, -webkit-transform .15s ease-in-out;
  transition: transform .15s ease-in-out, opacity .15s ease-in;
  transition: transform .15s ease-in-out, opacity .15s ease-in, -webkit-transform .15s ease-in-out;
}
.upload .check-wrapper .check {
  width: 100px;
  width: 100px;
  fill: none;
  stroke: var(--check-color);
  stroke-width: 7;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 100 0;
  stroke-dashoffset: 100;
}
.upload .shadow {
  opacity: var(--opacity, 0);
  overflow: hidden;
  position: absolute;
  height: 100%;
  width: 100%;
  border-radius: var(--border-radius);
  -webkit-filter: blur(25px);
          filter: blur(25px);
  z-index: -1;
  transition: all .5s ease;
}
.upload .shadow::before {
  content: '';
  position: absolute;
  top: -25%;
  left: -25%;
  height: 150%;
  width: 150%;
  -webkit-animation: shadow-animate 5s linear infinite;
          animation: shadow-animate 5s linear infinite;
}
.upload.drag {
  --scale: 1.03;
  --shadow-y: 5px;
  --shadow-blur: 20px;
}
.upload.drop .text.text-drop {
  --opacity: 0;
  transition: opacity .15s ease-out;
}
.upload.drop .text.text-upload {
  --opacity: 1;
  transition: opacity .15s ease-out .15s;
}
.upload.drop .shadow {
  --opacity: 1;
}
.upload.drop .progress-wrapper {
  opacity: var(--opacity, 1);
  -webkit-transform: scale(var(--scale, 1)) rotate(var(--rotate, -90deg));
          transform: scale(var(--scale, 1)) rotate(var(--rotate, -90deg));
}
.upload.drop .progress-wrapper .progress {
  -webkit-animation: progress 3s ease .3s forwards;
          animation: progress 3s ease .3s forwards;
}
/* .upload.done {
  --opacity: 0;
} */
.upload.done .text.text-upload {
  --opacity: 0;
}
.upload.done .shadow {
  --opacity: 0;
}
.upload.done .progress-wrapper {
  --scale: .95;
  transition: opacity .3s, -webkit-transform .3s;
  transition: transform .3s, opacity .3s;
  transition: transform .3s, opacity .3s, -webkit-transform .3s;
}
.upload.done .check-wrapper {
  --opacity: 1;
  --scale: 1;
  --rotate: 0deg;
  transition: opacity .5s ease-in .3s, -webkit-transform .5s ease-in-out .3s;
  transition: transform .5s ease-in-out .3s, opacity .5s ease-in .3s;
  transition: transform .5s ease-in-out .3s, opacity .5s ease-in .3s, -webkit-transform .5s ease-in-out .3s;
}
.upload.done .check-wrapper .check {
  -webkit-animation: checkTick .5s ease-in-out .3s forwards;
          animation: checkTick .5s ease-in-out .3s forwards;
}

@keyframes progress {
  0% {
    stroke-dashoffset: 722;
  }
  20% {
    stroke-dashoffset: 500;
  }
  50% {
    stroke-dashoffset: 322;
  }
  55% {
    stroke-dashoffset: 300;
  }
  100% {
    stroke-dashoffset: 0;
  }
}

@keyframes checkTick {
  0% {
    stroke-dasharray: 0 100;
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dasharray: 100 0;
    stroke-dashoffset: 100;
  }
}
</style>
<div class="container-fluid indmain2">
  <span class="uploadp"> My Photos</span>
<h1 class="indmainh1 mt-2">Upload Photos</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12 uploadleftdiv">
      <h5 class="cashousp1 text-black font-weight-bold">File type required</h5>
      <p class="uploadp">Below are the file types which required for each Photos files</p>
      <div class="row ml-1">
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">PNG</button>
        </div>
        <div class="uploadrowbt">
          <button class="btn uploadexmbt">JPG</button>
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
      {{-- <form action="{{ route('illustrations.drafts') }}" method="POST" enctype="multipart/form-data" id="image-upload" >
            @csrf
            <!-- <div>
            <h2>➕</h2><br>
            <span class="uploadp mt-2">
            </span>
            </div> -->
            <input type="file" name="illustration">
            <button type="submit" class="btn btn-sm btn-success">Upload</button>
        </form>
</label> --}}
 <form action="{{ route('illustrations.drafts') }}" method="POST" enctype="multipart/form-data" class="w-100 h-100" id="image-upload" >
            @csrf
            <input type="hidden" name="p_id" value="{{rand()}}">
              <div class="upload">
  <input type="file" id="file-input" name="file_uploads[]" multiple title="" class="drop-here">
  <div class="text text-drop">
                    <span class="h2 d-block">➕</span>
                    <div class="pt-3 w-75 m-auto">Click or Drag and Drop to upload icons</div>
                </div>
  <div class="text text-upload"></div>
  <svg class="progress-wrapper" width="300" height="300">
    <circle class="progress" r="115" cx="150" cy="150"></circle>
  </svg>
  <svg class="check-wrapper" width="130" height="130">
    <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
  </svg>
</div>

        </form>
    </div>
  </div>
</div>
</div>

<!-- /container -->

@endsection
@push('scripts')
<script type="text/javascript">
      //  Dropzone.options.imageUpload = {
   //         maxFilesize         :       1,
      //      acceptedFiles: ".jpeg,.jpg,.png,.gif"
        //};


        // Code By Webdevtrick ( https://webdevtrick.com )
var fileUpload = document.querySelector(".upload");

fileUpload.addEventListener("dragover", function() {
  this.classList.add("drag");
  this.classList.remove("drop", "done");
});

fileUpload.addEventListener("dragleave", function() {
  this.classList.remove("drag");
});

fileUpload.addEventListener("drop", start, false);
fileUpload.addEventListener("change", start, false);

$('input#file-input').change(function(){
    var files = $(this)[0].files;
    $('.text-upload').text('Uploading \n'+files.length+'/'+files.length+' files')
});
function start() {
  this.classList.remove("drag");
  this.classList.add("drop");

  setTimeout(() =>
   this.classList.add("done")
   , 3000);
  setTimeout(() =>
   $('#image-upload').submit()
   , 5000);
}
</script>




@endpush