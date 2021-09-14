@extends('layouts.vendor') @section('title','Icon') @section('content')
<link rel="stylesheet" href="{{asset('public/asset/tagify.css')}}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('public/asset/jQuery.tagify.min.js')}}"></script>
<style>
    .tags-input-wrapper {
        background: transparent;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        width: 100%;
        min-height: 80px;
        border: 1px solid;
    }
    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        width: 140px;
        margin-left: 8px;
    }
    .tags-input-wrapper .tag {
        display: inline-block;
        color: #fff;
        background-color: #17a2b8;
        color: white;
        border-radius: 5px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        font-size: 75%;
    }
    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }

    .suggestedTags .badge {
        margin-right: 5px;
    }
    .cp {
        cursor: pointer;
    }
    .badge-info {
        color: #fff;
        background-color: #17a2b8;
    }
    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
</style>

<div class="container-fluid indmain2">
    <span class="uploadp"> My Icons</span><br />
    <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-12"><span class="indmainh1 mt-2">My Drafts</span><span class="uploadp ml-3">1 Icons</span></div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="row float-right">
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" onclick="submitForm(this)">
                        <a href="{{ route('save.all.drafts') }}" onclick="event.preventDefault();  document.getElementById('all-products-form').submit();">Save Draft</a>
                        {{-- <form id="savedrafts-form" action="{{ route('save.drafts',$products[0]['id']) }}" method="POST" style="display: none;">
                            @csrf
                        </form> --}}
                    </button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" onclick="submitForm(this)"><a href="{{route('product-delete',$products[0]['id'])}}"></a> Delete Draft</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" onclick="submitForm(this)">Upload More</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" id="advandedOption">Advanced Options</button>
                </div>
                <div class="uploadrowbt2">
                    <button class="btn uploadexmbt2" onclick="submitForm(this)">Submit as Individual</button>
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
                            <input type="text" class="form-control" id="assets" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="">Assets Price</label>
                            <input type="number" class="form-control" id="assetPrice" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="form-group">
                            <!-- <div class="tag-field js-tags">
                                <input class="js-tag-input" placeholder="Enter new tag..." id="textInput"/>
                            </div> -->
                            {{-- <textarea type="text" class="form-control" placeholder="description"></textarea> --}}
                            <textarea name="basic" class="form-control" autofocus rows="5" id="assetTags">tag1, tag2</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Asset Description</label>
                            <input type="text" class="form-control" id="assetDescription" />
                        </div>
                    </div>
                    <div class="col-md-4 mt-4">
                        <button class="btn btn-primary btn-md pull-right" onclick="addDataToItem()">Apply to all items</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('save.all.drafts') }}" method="post" id="all-products-form" onkeypress="return event.keyCode != 13;">
        @csrf
    <div class="row">
        @foreach ($products as $key=> $product)

        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="draftouterdiv mt-4">
                <div class="text-center">
                    <img src="{{url('public/images/icons/'.$product['name'])}}" class="draftimg1" alt="" />
                </div>

                <div class="row" style="border-top: 1px solid #d8dbeb; border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                    <input type="hidden" class="draftin2" value="{{$product['id']}}" name="id[]" id="" />
                    <div class="col-lg-9 col-md-9 col-sm-9 col-9 px-0 border-right">
                        <input type="text" class="draftin1 productTitle" value="{{$product['name']}}" name="title[]" id="productTitle" />
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3 pr-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>$</span>
                            <input type="text" class="draftin2 border-0 pl-1 productPrice" value="10" name="price[]" id="productPrice" />
                        </div>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-2 col-2">
                        <input type="text" class="draftin3 productDescription" placeholder="Description" name="description[]" id="productDescription" />
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid #d8dbeb; width: 99%; margin: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="height: 150px; overflow-y: scroll;">
                        <span class="draftsp12">1/50 Tags (4 required)</span><br />

                        @foreach($tagsSuggteds[$key] as $tags)
                        <span class="badge badge-info">{{$tags}}</span>
                        @endforeach

                        <textarea  class="input1 p-3" data-taginput="taginput{{$key}}[]" cols="35" rows="2" onmouseenter="addDivs(this)"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="border-left: 1px solid #d8dbeb;">
                        <div class="draftsp11">Suggested tags</div>
                        <div class="suggestedTags">
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">one</span>
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">two</span>
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">three</span>
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">four</span>
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">five</span>
                            <span class="cp badge badge-info appendTag" data-taginput="taginput{{$key}}[]" onclick="suggestionTagAppend(this)">six</span>
                        </div>
                        <!-- @foreach($tagsSuggteds[$key] as $tags)
                      <span class="badge badge-info">{{$tags}}</span>
                      @endforeach -->
                    </div>
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

        @endforeach
    </div>
</form>
</div>
<!-- /container -->

<!-- <input type="text" id="tag-input1"> -->

@endsection @push('scripts') @parent
<script>
    $(document).ready(function () {
        $("#advandedOption").click(function () {
            $("#advancedDiv").toggle();
        });
    });

// Function for submiting form
function submitForm(e){
    $('#all-products-form').removeAttr("onkeypress")
    $(e).attr('form','all-products-form')
}



    const addDataToItem = () => {
        if (assets.value) {
            $('.productTitle').val(assets.value);
        }
        if (assetPrice.value) {
            $('.productPrice').val(assetPrice.value);
        }
        if (assetDescription.value) {
            $('.productDescription').val(assetDescription.value);
        }
        // console.log( JSON.parse($("#assetTags").val())[0].value);
let i = 0
                for(let item of document.querySelectorAll('tag')){
i++;
                    // creating span
                    let creatingSpanAdvance = document.createElement("span");
                    creatingSpanAdvance.classList.add("tag");
                    creatingSpanAdvance.append(item.getAttribute('value'));

                     // creating  input tag
                    let creatingInputTag = document.createElement("input");
                    creatingInputTag.setAttribute("name",'taginput'+i);
                    creatingInputTag.setAttribute("value",item.getAttribute('value'));
                    creatingInputTag.setAttribute("hidden",'');

                    creatingSpanAdvance.append(creatingInputTag)

                    // creating  anchor tag
                    let creatingAncherTagAdvance = document.createElement("a");
                    creatingAncherTagAdvance.append("x");
                    creatingAncherTagAdvance.setAttribute("onclick", "removeTag(this)");

                    // append ancher tag into span
                    creatingSpanAdvance.append(creatingAncherTagAdvance);
                   
                    $('.tags-input-wrapper').prepend(creatingSpanAdvance)
                }
      

      
    };

    // description tag code Start
    var tags = [];
    var $container = document.querySelector("div");
    var $input = document.querySelector("input");
    var $tags = document.querySelector(".js-tags");

    $container.addEventListener("click", function () {
        $input.focus();
    });

    $container.addEventListener("keydown", function (evt) {
        if (!evt.target.matches(".js-tag-input")) {
            return;
        }

        if (evt.keyCode !== 13) {
            return;
        }

        var value = String(evt.target.value);

        if (!value.length || value.length > 20 || tags.length === 3) {
            return;
        }

        tags.push(evt.target.value);
        $input.value = "";
        render(tags, $tags);
    });

    $container.addEventListener("keydown", function (evt) {
        if (!evt.target.matches(".js-tag-input")) {
            return;
        }

        if (evt.keyCode !== 8) {
            return;
        }

        if (String(evt.target.value).length) {
            return;
        }

        tags = tags.slice(0, tags.length - 1);
        $input.value = "";
        render(tags, $tags);
    });

    $container.addEventListener(
        "click",
        function (evt) {
            if (evt.target.matches(".js-tag-close") || evt.target.matches(".js-tag")) {
                tags = tags.filter(function (tag, i) {
                    return i != evt.target.getAttribute("data-index");
                });
                render(tags, $tags);
            }
        },
        true
    );

    function render(tags, el) {
        el.innerHTML =
            tags
                .map(function (tag, i) {
                    return '<div class="tag js-tag" data-index="' + i + '">' + tag + '<span class="tag-close js-tag-close" data-index="' + i + '">×</span>' + "</div>";
                })
                .join("") + (tags.length === 3 ? "" : '<input placeholder="Enter new tag..." class="js-tag-input">');

        $container.querySelector(".js-tag-input").focus();
        $("#textInput").css("width", "100%");
    }

    // description tag code end

    // code of suggestion tags section start
    const addDivs = (e) => {
        // creating new div
        console.log(e);
        let creatingDiv = document.createElement("div");
        creatingDiv.classList.add("tags-input-wrapper");
        // Creating input into new div
        let newInput = document.createElement("input");
        newInput.setAttribute("type", "text");
        newInput.setAttribute("data-taginput", $(e).data('taginput'));
        newInput.setAttribute("onkeydown", "addTags(this)");

        // append Tags
        e.parentNode.append(creatingDiv);
        e.nextElementSibling.append(newInput);

        // hidding the textarea
        $(e).hide();
    };

    const addTags = (e) => {
        let keycode = event.keyCode ? event.keyCode : event.which;

        if (keycode == "13" && e.value !== "") {
            // console.log("duabra hoa");

            // creating span
            let creatingSpan = document.createElement("span");
            creatingSpan.classList.add("tag");
            creatingSpan.append(e.value);

            // creating  anchor tag
            let creatingAncherTag = document.createElement("a");
            creatingAncherTag.append("x");
            creatingAncherTag.setAttribute("onclick", "removeTag(this)");

            // append ancher tag into span
            creatingSpan.append(creatingAncherTag);


              // creating  input tag
            let creatingInputTag = document.createElement("input");
            creatingInputTag.setAttribute("name", $(e).data('taginput'));
            creatingInputTag.setAttribute("value", e.value);
            creatingInputTag.setAttribute("hidden",'');
            // append input tag into span
            creatingSpan.append(creatingInputTag);

            // append Tag into textbox
            e.value = "";
            e.parentNode.prepend(creatingSpan);
        }
    };

    // adding suggestion Tag function
    const suggestionTagAppend = (e) => {
        // condition for handling errors
        let checkingDiv = e.parentNode.parentNode.previousElementSibling.children[4];
        if (checkingDiv) {
            // ========
            // Code of this function Starts here
            // ========
            $(e).removeClass("cp badge badge-info");
            $(e).addClass("tag");
            $(e).removeAttr("onclick");


             // creating  input tag
             let creatingInputTag = document.createElement("input");
            creatingInputTag.setAttribute("name",$(e).data('taginput'));
            creatingInputTag.setAttribute("value",$(e).html());
            creatingInputTag.setAttribute("hidden",'');
            // append input tag into span

            e.append(creatingInputTag);


            // creating Anchor tag in suggestion section
            let creatingAncherTag = document.createElement("a");
            creatingAncherTag.append("x");
            creatingAncherTag.setAttribute("onclick", "removeTag(this)");
            e.append(creatingAncherTag);




            // Main tag in which all tags is to be append
            let mainWrapper = e.parentNode.parentNode.previousElementSibling.children[4];
            if (mainWrapper) {
                mainWrapper.prepend(e);
            }
            // =========
            // Code of this function ends here
            // =========
        } else {
            alert("please select input");
        }
    };

    // removing Tag function
    const removeTag = (e) => {
        // Suggestion div
        let sugestDiv = e.parentNode.parentNode.parentNode.nextElementSibling.children[1];

        // adding Class and function
        var tagToRemove = $(e).parent();
        $(e).parent().remove();
        tagToRemove.children().remove();
        tagToRemove.addClass("cp badge badge-info appendTag").removeClass("tag");
        $(sugestDiv).append(tagToRemove);

        // checking tag which has no function
        setTimeout(() => {
            for (let item of document.querySelectorAll(".appendTag")) {
                if (!item.hasAttribute("onclick") && item.classList.contains("cp")) {
                    item.setAttribute("onclick", "suggestionTagAppend(this)");
                    // console.log(item);
                }
            }
        }, 500);
    };

    // code of suggestion tags section end
</script>

<script data-name="basic">
    (function () {
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector("textarea[name=basic]");

        // initialize Tagify on the above input node reference
        new Tagify(input);
    })();
</script>

@endpush
