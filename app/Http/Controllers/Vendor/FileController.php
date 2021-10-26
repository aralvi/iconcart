<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Suggested;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ZipArchive;

class FileController extends Controller
{
    /*
    *
    */
    public function uploadFile(Request $request)
    {
        // dd(Auth::user()->id);
        // dd($request->file('icons_upload'));
        $category = Category::where('name','icon')->first();
        $request->validate([
            'file_uploads' => 'required|array',
            'file_uploads.*' => 'required|image|mimes:svg',
          ]);
        //   $products=[];
        // $tagsSuggteds=[];
          foreach ($request->file('file_uploads') as $key => $icon) {
              $imagePath    = $icon;
              $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
              $extension    = $icon->getClientOriginalExtension();
              $fileNames    = explode(",",$imageName);
              $fileEx       = $fileNames[0].'.'.$extension;
              $path         = $icon->move(public_path('images/icons'),$fileEx);

              $product     =   new Product();
              $product->user_id       =  Auth::user()->id;
              $product->p_id       =  $request->p_id;
                  $product->name          =  $fileEx;
                  $product->media          =  $fileEx;
                  $product->image        =  $fileNames[0];
                  $product->category_id   =  $category->id;
                  $product->tags          =  $imageName;
                  $product->save();
                $suggetedTags = new Suggested();
                $suggetedTags->product_id=$product->id;
                $suggetedTags->tags= $imageName;
                $suggetedTags->save();

            //   array_push($products,$product);
              $tagsSuggted      = explode(",",$imageName);
            //   array_push($tagsSuggteds,$tagsSuggted);
          }
          $products = Product::where('status','0')->where('p_id',$request->p_id)->get();
          $productsArray = Product::where('status','0')->where('p_id',$request->p_id)->pluck('id')->toArray();

          $tagsSuggteds = Suggested::whereIn('product_id',$productsArray)->get();
        //   dd($tagsSuggteds);


    //    dd($products);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }
    public function uploadIcon(Request $request)
    {
        $category = Category::where('name','icon')->first();
        $request->validate([
            'file_uploads' => 'required|array',
            'file_uploads.*' => 'required|image|mimes:svg',
          ]);
          $products=[];
        $tagsSuggteds=[];
          foreach ($request->file('file_uploads') as $key => $icon) {
              $imagePath    = $icon;
              $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
              $extension    = $icon->getClientOriginalExtension();
              $fileNames    = explode(",",$imageName);
              $fileEx       = $fileNames[0].'.'.$extension;
              $path         = $icon->move(public_path('images/icons'),$fileEx);

              $product     =   new Product();
              $product->user_id       =  Auth::user()->id;
              $product->p_id       =  $request->p_id;
                  $product->name          =  $fileEx;
                  $product->media          =  $fileEx;
                  $product->image        =  $fileNames[0];
                  $product->category_id   =  $category->id;
                  $product->tags          =  $imageName;
                  $product->save();
                  array_push($products,$product);
                $suggetedTags = new Suggested();
                $suggetedTags->product_id=$product->id;
                $suggetedTags->tags= $imageName;
                $suggetedTags->save();

              $tagsSuggted      = explode(",",$imageName);
              array_push($tagsSuggteds,$tagsSuggted);
          }
        //   $products = Product::where('status','0')->where('p_id',$request->p_id)->get();
        //   $productsArray = Product::where('status','0')->where('p_id',$request->p_id)->pluck('id')->toArray();

        //   $tagsSuggteds = Suggested::whereIn('product_id',$productsArray)->get();
        //   dd($tagsSuggteds);


        if(isset($products)) {
            return response()->json(['products'=>$products,'tagsSuggteds'=>$tagsSuggteds]);
        }
    }


    public function photoUpload(Request $request)
    {
        $array             = array(".jpg",".jpeg",".png");
        $category          = Category::where('name','photo')->first();
        $request->validate([
            'file_uploads'  => 'required|array',
            'file_uploads.*'  => 'image|mimes:png,jpg',
          ]);

        foreach ($request->file('file_uploads') as $key => $photo) {
             $imagePath     = $photo;
            $imageName      = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            $extension      = $photo->getClientOriginalExtension();
            $fileNames      = explode(",",$imageName);
            $fileEx         = $fileNames[0].'.'.$extension;
            $path           = $photo->move(public_path('images/icons'),$fileEx);
            $str            = str_replace($array, "", $imageName);
            $suggetedTags   = Suggested::create(['tags'=>$str]);

              $product     =   new Product();
              $product->user_id       =  Auth::user()->id;
              $product->p_id       =  $request->p_id;
                  $product->name          =  $fileEx;
                  $product->media          =  $fileEx;
                  $product->image        =  $fileNames[0];
                  $product->category_id   =  $category->id;
                  $product->tags          =  $imageName;
                  $product->save();
                $suggetedTags = new Suggested();
                $suggetedTags->product_id=$product->id;
                $suggetedTags->tags= $imageName;
                $suggetedTags->save();

            //   array_push($products,$product);
              $tagsSuggted      = explode(",",$imageName);
            //   array_push($tagsSuggteds,$tagsSuggted);
          }
          $products = Product::where('status','0')->where('p_id',$request->p_id)->get();
          $productsArray = Product::where('status','0')->where('p_id',$request->p_id)->pluck('id')->toArray();

          $tagsSuggteds = Suggested::whereIn('product_id',$productsArray)->get();
        //   dd($tagsSuggteds);


    //    dd($products);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }
    public function photoUploadMore(Request $request)
    {
        $array             = array(".jpg",".jpeg",".png");
        $category          = Category::where('name','photo')->first();
        $request->validate([
            'file_uploads'  => 'required|array',
            'file_uploads.*'  => 'image|mimes:png,jpg',
          ]);
        $products=[];
        $tagsSuggteds=[];
        foreach ($request->file('file_uploads') as $key => $photo) {
             $imagePath     = $photo;
            $imageName      = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            $extension      = $photo->getClientOriginalExtension();
            $fileNames      = explode(",",$imageName);
            $fileEx         = $fileNames[0].'.'.$extension;
            $path           = $photo->move(public_path('images/icons'),$fileEx);
            $str            = str_replace($array, "", $imageName);
            $suggetedTags   = Suggested::create(['tags'=>$str]);

              $product     =   new Product();
              $product->user_id       =  Auth::user()->id;
              $product->p_id       =  $request->p_id;
                  $product->name          =  $fileEx;
                  $product->media          =  $fileEx;
                  $product->image        =  $fileNames[0];
                  $product->category_id   =  $category->id;
                  $product->tags          =  $imageName;
                  $product->save();
                $suggetedTags = new Suggested();
                $suggetedTags->product_id=$product->id;
                $suggetedTags->tags= $imageName;
                $suggetedTags->save();

              array_push($products,$product);
              $tagsSuggted      = explode(",",$imageName);
              array_push($tagsSuggteds,$tagsSuggted);
          }
        //   $products = Product::where('status','0')->where('p_id',$request->p_id)->get();
        //   $productsArray = Product::where('status','0')->where('p_id',$request->p_id)->pluck('id')->toArray();

        //   $tagsSuggteds = Suggested::whereIn('product_id',$productsArray)->get();
        //   dd($tagsSuggteds);


    //    dd($products);
        if(isset($products)) {
           return response()->json(['products'=>$products,'tagsSuggteds'=>$tagsSuggteds]);
        }
    }

    public function vectorUpload(Request $request)
    {
        $category  = Category::where('name','illustration')->first();
        $request->validate([
            'file_uploads'  => 'required|array',
            'file_uploads.*' => 'required|mimes:zip',
          ]);
        $products = [];
        $tagsSuggteds = [];
          foreach ($request->file('file_uploads') as $zipFile) {
            // $imagePath    = $request->file('file_uploads');
            // $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            // $extension    = $request->file('file_uploads')->getClientOriginalExtension();
            // $fileNames    = explode(",",$imageName);
            // $fileEx       = $fileNames[0].'.'.$extension;
            // $path         = $request->file('file_uploads')->move(public_path('images/icons'),$fileEx);
            $za = new ZipArchive();
            $za->open($zipFile);
            $za->extractTo(getcwd() . 'temp/');
            for ($i = 0; $i < $za->numFiles; $i++) {
                $stat = $za->statIndex($i);
                if (strpos(basename($stat['name']), '.zip') !== false) {
                    $newZip = new ZipArchive();
                    $newZip->open(getcwd() . 'temp/' . $stat['name']);
                    $newZip->extractTo(public_path('images/icons'));
                    for ($k = 0; $k < $newZip->numFiles; $k++) {
                        $fileName = $newZip->statIndex($k);
                        if (strpos(basename($fileName['name']), '.jpg') !== false || strpos(basename($fileName['name']), '.png') !== false) {
                            $product     =   new Product();
                            $product->user_id       =  Auth::user()->id;
                            $product->p_id       =  $request->p_id;
                            $product->name          =  basename($fileName['name']);
                            $product->media          =  basename($fileName['name']);
                            $product->image        =  basename($fileName['name']);
                            $product->category_id   =  $category->id;
                            $product->tags          =  basename($fileName['name']);
                            $product->save();

                            $suggetedTags = new Suggested();
                            $suggetedTags->product_id = $product->id;
                            $suggetedTags->tags = basename($fileName['name']);
                            $suggetedTags->save();
                            // array_push($products, $product);
                            $tagsSuggted      = explode(",", basename($fileName['name']));
                            // array_push($tagsSuggteds, $tagsSuggted);
                            // dd($products, $tagsSuggteds);
                        }
                    }
                    $newZip->close();
                }
            }
            $za->close();
          }
        $products = Product::where('status', '0')->where('p_id', $request->p_id)->get();
        $productsArray = Product::where('status', '0')->where('p_id', $request->p_id)->pluck('id')->toArray();

        $tagsSuggteds = Suggested::whereIn('product_id', $productsArray)->get();

        // dd($products);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }
     public function vectorUploadMore(Request $request)
    {
        $category  = Category::where('name','illustration')->first();
        $request->validate([
            'file_uploads'  => 'required|array',
            'file_uploads.*' => 'required|mimes:zip',
          ]);
        $products = [];
        $tagsSuggteds = [];
          foreach ($request->file('file_uploads') as $zipFile) {
            // $imagePath    = $request->file('file_uploads');
            // $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            // $extension    = $request->file('file_uploads')->getClientOriginalExtension();
            // $fileNames    = explode(",",$imageName);
            // $fileEx       = $fileNames[0].'.'.$extension;
            // $path         = $request->file('file_uploads')->move(public_path('images/icons'),$fileEx);
            $za = new ZipArchive();
            $za->open($zipFile);
            $za->extractTo(getcwd() . 'temp/');
            for ($i = 0; $i < $za->numFiles; $i++) {
                $stat = $za->statIndex($i);
                if (strpos(basename($stat['name']), '.zip') !== false) {
                    $newZip = new ZipArchive();
                    $newZip->open(getcwd() . 'temp/' . $stat['name']);
                    $newZip->extractTo(public_path('images/icons'));
                    for ($k = 0; $k < $newZip->numFiles; $k++) {
                        $fileName = $newZip->statIndex($k);
                        if (strpos(basename($fileName['name']), '.jpg') !== false || strpos(basename($fileName['name']), '.png') !== false) {
                            $product     =   new Product();
                            $product->user_id       =  Auth::user()->id;
                            $product->p_id       =  $request->p_id;
                            $product->name          =  basename($fileName['name']);
                            $product->media          =  basename($fileName['name']);
                            $product->image        =  basename($fileName['name']);
                            $product->category_id   =  $category->id;
                            $product->tags          =  basename($fileName['name']);
                            $product->save();

                            $suggetedTags = new Suggested();
                            $suggetedTags->product_id = $product->id;
                            $suggetedTags->tags = basename($fileName['name']);
                            $suggetedTags->save();
                            array_push($products, $product);
                            $tagsSuggted      = explode(",", basename($fileName['name']));
                            array_push($tagsSuggteds, $tagsSuggted);
                        }
                    }
                    $newZip->close();
                }
            }
            $za->close();
          }
        // $products = Product::where('status', '0')->where('p_id', $request->p_id)->get();
        // $productsArray = Product::where('status', '0')->where('p_id', $request->p_id)->pluck('id')->toArray();

        // $tagsSuggteds = Suggested::whereIn('product_id', $productsArray)->get();

        // dd($products);
        if(isset($products)) {
             return response()->json(['products'=>$products,'tagsSuggteds'=>$tagsSuggteds]);
        }
    }
    public function saveDrafts(Request $request)
    {
        foreach ($request->id as $key => $id) {
            $tags = 'taginput'.$key;

           $products = Product::find($id);
       $products->status = 1;
       $products->price = $request->price[$key];
       $products->description = $request->description[$key];
       $products->name = $request->title[$key];
       $products->tags = $request->$tags;
       $products->status = 1;
       $products->p_id = rand();
       $products->update();
       }
        return redirect(url('home'));
    }


    public function saveToReview(Request $request,$id)
    {

        foreach($request->id as $productID){
            $products = Product::findOrFail($productID);
            $products->status = 3;
            if ($_GET['pack'] != 'pack') {
                $products->p_id = '';
            }

            $products->update();
        }
        return redirect(url('home'));
    }

    public function iconsDraftShow()
    {
         $products = Product::whereIn('status',[0,1])->whereHas('category',function($q){
             $q->where('name','=','icon');
         })->get();
        return view('icons.icon-drafts-show',compact('products'));

    }

    public function photosDraftShow()
    {
         $products = Product::whereIn('status',['0','1'])->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->get();
        return view('photos.photo-draft-show',compact('products'));

    }

    public function vectorDraftShow()
    {
         $products = Product::where('status','1')->whereHas('category',function($q){
            $q->where('name','=','illustration');
        })->get();
        return view('vectors.vector-draft-show',compact('products'));

    }



    public function iconeEdit($id)
    {
        $products=[];
        // $tagsSuggteds=[];
        $product      = Product::where('id',$id)->whereIn('status',['0','1'])->whereHas('category',function($q){
            $q->where('name','=','icon');
        })->first();
        array_push($products,$product);
        $tagsSuggted  = explode(",",$product->tags);
        // array_push($tagsSuggteds,$tagsSuggted);
        $tagsSuggteds = Suggested::where('product_id',$product->id)->get();
        return view('icons.drafts',compact('products','tagsSuggteds'));

    }

    public function photoEdit($id)
    {
       $products=[];
        // $tagsSuggteds=[];
        $product      = Product::where('id',$id)->whereIn('status',['0','1'])->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->first();
        array_push($products,$product);
        $tagsSuggted  = explode(",",$product->tags);
        // array_push($tagsSuggteds,$tagsSuggted);
        $tagsSuggteds = Suggested::where('product_id',$product->id)->get();
        return view('icons.drafts',compact('products','tagsSuggteds'));

    }
    public function vectorEdit($id)
    {
        $products=[];
        // $tagsSuggteds=[];
        $product      = Product::where('id',$id)->whereIn('status',['0','1'])->whereHas('category',function($q){
            $q->where('name','=','illustration');
        })->first();
        array_push($products,$product);
        $tagsSuggted  = explode(",",$product->tags);
        // array_push($tagsSuggteds,$tagsSuggted);
        $tagsSuggteds = Suggested::where('product_id',$product->id)->get();
        return view('icons.drafts',compact('products','tagsSuggteds'));

    }
    public function iconsReview()
    {
        $products      = Product::where('status','3')->with('category')->whereHas('category',function($q){
            $q->where('name','=','icon');
        })->get();
        return view('icons.reviewpacks',compact('products'));

    }

    public function photoReview()
    {
        $products      = Product::where('status','3')->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->get();
        return view('photo.reviewpacks',compact('products'));

    }
    public function vectorReview()
    {
        $products      = Product::where('status','3')->whereHas('category',function($q){
            $q->where('name','=','vector');
        })->get();
        return view('vectors.reviewpacks',compact('products'));

    }

    public function iconDestroy(Request$request,$id)
    {
        if(isset($_GET['delete']) ){
            foreach ($request->id as $product) {
                Product::findOrFail($product)->delete();
            }
            return redirect('/home');
        }else{

            Product::findOrFail($id)->delete();
            return back();
        }
    }

}
