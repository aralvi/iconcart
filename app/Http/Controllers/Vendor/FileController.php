<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Suggested;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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


    public function photoUpload(Request $request)
    {
        $array             = array(".jpg",".jpeg",".png");
        $category          = Category::where('name','photo')->first();
        $request->validate([
            'file_uploads'  => 'required|array',
            'file_uploads.*'  => 'image|mimes:png,jpg',
          ]);
        //   if ($request->file('illustration')) {
        //     $imagePath      = $request->file('illustration');
        //     $imageName      = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
        //     $extension      = $request->file('illustration')->getClientOriginalExtension();
        //     $fileNames      = explode(",",$imageName);
        //     $fileEx         = $fileNames[0].'.'.$extension;
        //     $path           = $request->file('illustration')->move(public_path('images/icons'),$fileEx);
        //     $str            = str_replace($array, "", $imageName);
        //     $suggetedTags   = Suggested::create(['tags'=>$str]);
        //   }

        // $products = Product::create([
        //     'name'          =>  $fileEx,
        //     'image'         =>  $fileNames[0],
        //     'category_id'   =>  $category->id,
        //     'tags'          =>  $imageName,
        // ]);
        // $tags              = DB::table('suggesteds')->where('tags',$imageName)->get();
        // $tagsSuggteds      = explode(",",$tags);
        // if(isset($products)) {
        //     return view('icons.drafts',compact('products','tagsSuggteds'));
        // }
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

    public function vectorUpload(Request $request)
    {
        $category  = Category::where('name','vector')->first();
        $request->validate([
            'vector' => 'required|mimes:zip',
          ]);
          if ($request->file('vector')) {
            $imagePath    = $request->file('vector');
            $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            $extension    = $request->file('vector')->getClientOriginalExtension();
            $fileNames    = explode(",",$imageName);
            $fileEx       = $fileNames[0].'.'.$extension;
            $path         = $request->file('vector')->move(public_path('images/icons'),$fileEx);
            $suggetedTags = Suggested::create(['tags'=>$imageName]);
          }

        $products           =   Product::create([
            'name'          =>  $fileEx,
            'image'         =>  $fileNames[0],
            'category_id'   =>  $category->id,
            'tags'          =>  $imageName,
        ]);
        $tagsSuggteds      = explode(",",$imageName);
        // dd($products);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
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
         $products = Product::where('status','1')->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->get();
        return view('photos.photo-draft-show',compact('products'));

    }

    public function vectorDraftShow()
    {
         $products = Product::where('status','1')->whereHas('category',function($q){
            $q->where('name','=','vector');
        })->get();
        return view('vectors.vector-draft-show',compact('products'));

    }



    public function iconeEdit($id)
    {
        $products=[];
        // $tagsSuggteds=[];
        $product      = Product::where(['id'=>$id,'status'=>'1'])->whereHas('category',function($q){
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
        $products      = Product::where(['id'=>$id,'status'=>'1'])->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->first();
        $tagsSuggteds  = explode(",",$products->tags);
        return view('icons.drafts',compact('products','tagsSuggteds'));

    }
    public function vectorEdit($id)
    {
        $products      = Product::where(['id'=>$id,'status'=>'1'])->whereHas('category',function($q){
            $q->where('name','=','vector');
        })->first();
        $tagsSuggteds  = explode(",",$products->tags);
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
