@extends('layouts.vendor')

@section('title','Iconupload')
@section('content')
<div class="container-fluid indmain2">
  <span class="uploadp">< My Icons</span>
<h1 class="indmainh1 mt-2">Upload Icons</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
    @foreach($products as $product)
    <div class="col-lg-2 col-md-2 col-sm-12 col-12 drtaall text-center">
       <a href="{{route('vector.edit',$product->id)}}"><img src="{{url('images/icons/'.$product['name'])}}" class="daraftallimg" alt=""></a>
        <i class="fa fa-trash alldraftfa"></i>
       <span class="text-black">no name</span><span class="uploadp ml-1">(0 icons)</span>
    </div>
    @endforeach
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
</script>

@endpush