@extends('layouts.vendor') @section('title','Icon') @section('content')
<div class="container-fluid indmain2">
    <span class="uploadp"> My Icons</span><br />
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-12"><span class="indmainh1 mt-2">My Drafts</span><span class="uploadp ml-3">1 Icons</span></div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="row float-right">
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2">
                        <a href="{{ route('save.drafts',$products[0]['id']) }}" onclick="event.preventDefault();  document.getElementById('savedrafts-form').submit();">Save Draft</a>
                        <form id="savedrafts-form" action="{{ route('save.drafts',$products[0]['id']) }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2"><a href="{{route('product-delete',$products[0]['id'])}}"></a> Delete Draft</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2">Upload More</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" id="advandedOption">Advanced Options</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt3">Submit as Individual</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2">
                        <a href="{{ route('submit-as-pack.drafts',$products[0]['id']) }}" onclick="event.preventDefault();  document.getElementById('review-form').submit();">Submit as pack</a>
                        <form id="review-form" action="{{ route('submit-as-pack.drafts',$products[0]['id']) }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="advancedDiv">
        <div class="col-md-12 mt-3">
            <div class="card-body bg-white">
                <h3>Advanced options</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Assets</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Assets Price</label>
                            <input type="number" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Asset Description</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button class="btn btn-primary btn-md pull-right">Apply to all items</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
      @foreach ($products as $key=> $product)

      <div class="col-lg-6 col-md-8 col-sm-12 col-12">
          <div class="draftouterdiv mt-4">
              <div class="text-center">
                  <img src="{{url('public/images/icons/'.$product['name'])}}" class="draftimg1" alt="" />
              </div>

              <div class="row" style="border-top: 1px solid #d8dbeb; border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <input type="hidden" class="draftin2" value="{{$product['id']}}" name="id" id="" />
                  <div class="col-lg-10 col-md-10 col-sm-9 col-9">
                      <input type="text" class="draftin1" value="{{$product['name']}}" name="" id="" />
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                      <input type="text" class="draftin2" value="$10" name="" id="" />
                  </div>
              </div>
              <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <div class="col-lg-12 col-md-12 col-sm-2 col-2">
                      <input type="text" class="draftin3" value="Description" name="" id="" />
                  </div>
              </div>
              <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-12" style="height: 150px; overflow-y: scroll;">
                      <span class="draftsp12">1/50 Tags (4 required)</span><br />

                       @foreach($tagsSuggteds[$key] as $tags)

                      <span class="badge badge-info">{{$tags}}</span>
                      @endforeach

                      <input class="input-tags" data-role="tagsinput" />
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-12" style="border-left: 1px solid #d8dbeb;">
                      <span class="draftsp11">Suggested tags</span><br />
                      @foreach($tagsSuggteds[$key] as $tags)

                      <span class="badge badge-info">{{$tags}}</span>
                      @endforeach
                  </div>
              </div>
              <div class="row ml-1 py-2">
                  <div class="uploadrowbt3">
                      <div class="uploadexmbt3nw"><img src="assets/images/tick.1318965.svg" alt="" /> JSON</div>
                  </div>
                  <div class="uploadrowbt3">
                      <button class="btn uploadexmbt3">+ JSON</button>
                  </div>
                  <div class="uploadrowbt3">
                      <button class="btn uploadexmbt3">+ AEP</button>
                  </div>
                  <div class="uploadrowbt3">
                      <button class="btn uploadexmbt3">+ ZIP</button>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
    </div>
</div>
<!-- /container -->
@endsection @push('scripts') @parent
<script>
    $(document).ready(function () {
        $("#advandedOption").click(function () {
            $("#advancedDiv").toggle();
        });
    });
</script>
@endpush
