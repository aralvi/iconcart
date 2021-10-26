@extends('layouts.vendor')

@section('title','Iconupload')
@section('content')
<div class="container-fluid indmain2">
  <span class="uploadp">My Illustration</span>
<h1 class="indmainh1 mt-2">Upload Illustration</h1>
<div class="uploadupperdiv mt-4">
  <div class="row">
     @foreach($products as $product)
            <div class="col-lg-2 col-md-2 col-sm-12 col-12 drtaall text-center">
                <a href="{{route('vector.edit',$product->id)}}"><img src="{{asset('public/images/icons/'.$product['name'])}}" class="daraftallimg" alt="" /></a>
                <a href="{{route('icon.delete',$product->id)}}"><i class="fa fa-trash alldraftfa"></i></a>

                <span class="text-black">{{$product->name}}</span><span class="uploadp ml-1">(1 Illustration)</span>
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