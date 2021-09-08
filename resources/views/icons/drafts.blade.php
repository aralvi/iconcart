@extends('layouts.vendor') @section('title','Icon') @section('content')

<style>
    
.tags-input-wrapper{
    background: transparent;
    padding: 10px;
    border-radius: 4px;
    max-width: 400px;
    border: 1px solid #ccc
}
.tags-input-wrapper input{
    border: none;
    background: transparent;
    outline: none;
    width: 140px;
    margin-left: 8px;
}
.tags-input-wrapper .tag{
    display: inline-block;
    color: #fff;
    background-color: #17a2b8;
    color: white;
    border-radius: 5px;
    padding: 0px 3px 0px 7px;
    margin-right: 5px;
    margin-bottom:5px;
    font-size:75%;
}
.tags-input-wrapper .tag a {
    margin: 0 7px 3px;
    display: inline-block;
    cursor: pointer;
}
.cp{
    cursor:pointer
}

#suggestedTags .badge{
margin-right: 5px;
}
#suggestedTags .badge a{
display:none;
}
</style>



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
                    <button class="btn  uploadexmbt2"><a href="{{route('product-delete',$products[0]['id'])}}"></a> Delete Draft</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn  uploadexmbt2">Upload More</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn  uploadexmbt2" id="advandedOption">Advanced Options</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn  uploadexmbt2">Submit as Individual</button>
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

    <div class="row" id="advancedDiv" style="display: none;">
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

      <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <div class="draftouterdiv mt-4">
              <div class="text-center">
                  <img src="{{url('public/images/icons/'.$product['name'])}}" class="draftimg1" alt="" />
              </div>

              <div class="row" style="border-top: 1px solid #d8dbeb; border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <input type="hidden" class="draftin2" value="{{$product['id']}}" name="id" id="" />
                  <div class="col-lg-10 col-md-10 col-sm-9 col-9 px-0">
                      <input type="text" class="draftin1" value="{{$product['name']}}" name="" id="" />
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-3 col-3 px-0">
                      <input type="text" class="draftin2" value="$10" name="" id="" />
                  </div>
              </div>
              <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <div class="col-lg-12 col-md-12 col-sm-2 col-2">
                      <input type="text" class="draftin3" placeholder="Description" name="" id="" />
                  </div>
              </div>
              <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="height: 150px; overflow-y: scroll;">
                      <span class="draftsp12">1/50 Tags (4 required)</span><br />

                       @foreach($tagsSuggteds[$key] as $tags)
                      <span class="badge badge-info">{{$tags}}</span>
                      @endforeach

                      <!-- <textarea class="input-tags" data-role="tagsinput" ></textarea> -->
                      <textarea class="input-tags" data-role="tagsinput"  id="tag-input1" ></textarea>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="border-left: 1px solid #d8dbeb;">
                      <span class="draftsp11">Suggested tags</span><br />
                      <div id="suggestedTags">
                          <span class="cp badge badge-info" onclick="appendTag(this)" >one</span>
                          <span class="cp badge badge-info" onclick="appendTag(this)" >two</span>
                          <span class="cp badge badge-info" onclick="appendTag(this)" >three</span>
                          <span class="cp badge badge-info" onclick="appendTag(this)" >four</span>
                          <span class="cp badge badge-info" onclick="appendTag(this)" >five</span>
                          <span class="cp badge badge-info" onclick="appendTag(this)" >six</span>
                        </div>
                      <!-- @foreach($tagsSuggteds[$key] as $tags)
                      <span class="badge badge-info">{{$tags}}</span>
                      @endforeach -->
                  </div>
              </div>
              <div class="row ml-1 py-2">
                  <div class="uploadrowbt3">
                      <div class="uploadexmbt3nw"><img src="assets/images/tick.1318965.svg" alt="" /> JSON</div>
                  </div>
                  <div class="uploadrowbt2">
                      <button class="btn uploadexmbt2 border">+ JSON</button>
                  </div>
                  <div class="uploadrowbt2">
                      <button class="btn uploadexmbt2 border">+ AEP</button>
                  </div>
                  <div class="uploadrowbt2">
                      <button class="btn uploadexmbt2 border">+ ZIP</button>
                  </div>
              </div>
          </div>
      </div>
      @endforeach
    </div>
</div>
<!-- /container -->


<!-- <input type="text" id="tag-input1"> -->


@endsection
 @push('scripts') @parent
<script>
    $(document).ready(function () {
        $("#advandedOption").click(function () {
            $("#advancedDiv").toggle();
        });
    });




(function(){

"use strict"


// Plugin Constructor
var TagsInput = function(opts){
    this.options = Object.assign(TagsInput.defaults , opts);
    this.init();
}

// Initialize the plugin
TagsInput.prototype.init = function(opts){
    this.options = opts ? Object.assign(this.options, opts) : this.options;

    if(this.initialized)
        this.destroy();
        
    if(!(this.orignal_input = document.getElementById(this.options.selector)) ){
        console.error("tags-input couldn't find an element with the specified ID");
        return this;
    }

    this.arr = [];
    this.wrapper = document.createElement('div');
    this.input = document.createElement('input');
    init(this);
    initEvents(this);

    this.initialized =  true;
    return this;
}

// Add Tags
TagsInput.prototype.addTag = function(string){

    if(this.anyErrors(string))
        return ;

    this.arr.push(string);
    var tagInput = this;

    var tag = document.createElement('span');
    tag.className = this.options.tagClass;
    tag.innerText = string;

    var closeIcon = document.createElement('a');
    closeIcon.innerHTML = '&times;';
    
    // delete the tag when icon is clicked
    closeIcon.addEventListener('click' , function(e){
        e.preventDefault();
        var tag = this.parentNode;

        for(var i =0 ;i < tagInput.wrapper.childNodes.length ; i++){
            if(tagInput.wrapper.childNodes[i] == tag)
            tagInput1.arr
            let count = -1;
            // console.log(tag.innerText.slice(0, -1));
            for(let item of tagInput1.arr){
                count++;
                if(item === tag.innerText.slice(0, -1)){
                    tagInput1.arr.splice(count,1)
                }
            }
            // $(tag).attr('onclick','appendTag(this)')
            $('#suggestedTags').append(tag)
        }
            $('#suggestedTags').children('span.tag').removeClass('tag').addClass('cp badge badge-info')
            setTimeout(() => {
                $('#suggestedTags').children('span.cp').attr('onclick','appendTag(this)')
                
            }, 1000);
    })


    tag.appendChild(closeIcon);
    this.wrapper.insertBefore(tag , this.input);
    this.orignal_input.value = this.arr.join(',');

    return this;
}

// Delete Tags
TagsInput.prototype.deleteTag = function(tag , i){
    tag.remove();
    this.arr.splice( i , 1);
    this.orignal_input.value =  this.arr.join(',');
    return this;
}

// Make sure input string have no error with the plugin
TagsInput.prototype.anyErrors = function(string){
    if( this.options.max != null && this.arr.length >= this.options.max ){
        console.log('max tags limit reached');
        return true;
    }
    
    if(!this.options.duplicate && this.arr.indexOf(string) != -1 ){
        console.log('duplicate found " '+string+' " ')
        return true;
    }

    return false;
}

// Add tags programmatically 
TagsInput.prototype.addData = function(array){
    var plugin = this;
    
    array.forEach(function(string){
        plugin.addTag(string);
    })
    return this;
}

// Get the Input String
TagsInput.prototype.getInputString = function(){
    return this.arr.join(',');
}


// destroy the plugin
TagsInput.prototype.destroy = function(){
    this.orignal_input.removeAttribute('hidden');

    delete this.orignal_input;
    var self = this;
    
    Object.keys(this).forEach(function(key){
        if(self[key] instanceof HTMLElement)
            self[key].remove();
        
        if(key != 'options')
            delete self[key];
    });

    this.initialized = false;
}

// Private function to initialize the tag input plugin
function init(tags){
    tags.wrapper.append(tags.input);
    tags.wrapper.classList.add(tags.options.wrapperClass);
    tags.orignal_input.setAttribute('hidden' , 'true');
    tags.orignal_input.parentNode.insertBefore(tags.wrapper , tags.orignal_input);
}

// initialize the Events
function initEvents(tags){
    tags.wrapper.addEventListener('click' ,function(){
        tags.input.focus();           
    });
    

    tags.input.addEventListener('keydown' , function(e){
        var str = tags.input.value.trim(); 

        if( !!(~[9 , 13 , 188].indexOf( e.keyCode ))  )
        {
            e.preventDefault();
            tags.input.value = "";
            if(str != "")
                tags.addTag(str);
        }

    });
}


// Set All the Default Values
TagsInput.defaults = {
    selector : '',
    wrapperClass : 'tags-input-wrapper',
    tagClass : 'tag',
    max : null,
    duplicate: false
}

window.TagsInput = TagsInput;

})();

var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate : false,
        max : 10
    });
    // tagInput1.addData(['TagOne' , 'TagTwo' , 'TagThree'])


 const appendTag = (e)=>{
   tagInput1.addData([e.innerText]);
    e.remove()
}
//  const appendTagNew = (e)=>{
//    tagInput1.addData([e.innerText]);
//     e.remove()
// }


</script>

@endpush
