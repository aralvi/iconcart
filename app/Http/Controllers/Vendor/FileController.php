<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Suggested;
use DB;

class FileController extends Controller
{
    /*
    *
    */
    public function uploadFile(Request $request)
    {
        $category          = Category::where('name','icon')->first();
        $request->validate([
            'icons_upload' => 'required|image|mimes:png,svg,ico,eps,ai,pdf',
          ]);
          if ($request->file('icons_upload')) {
            $imagePath    = $request->file('icons_upload');
            $imageName    = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            $extension    = $request->file('icons_upload')->getClientOriginalExtension();
            $fileNames    = explode(",",$imageName);
            $fileEx       = $fileNames[0].'.'.$extension;
            $path         = $request->file('icons_upload')->move(public_path('images/icons'),$fileEx);
            $suggetedTags = Suggested::create(['tags'=>$imageName]);
          }
         
       
        $products           =   Product::create([
            'name'          =>  $fileEx,
            'image'         =>  $fileNames[0],
            'category_id'   =>  $category->id,
            'tags'          =>  $imageName,
        ]);
        $tagsSuggteds      = explode(",",$imageName);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }

   
    public function photoUpload(Request $request)
    {
        $array             = array(".jpg",".jpeg",".png");
        $category          = Category::where('name','photo')->first();
        $request->validate([
            'illustration'  => 'required|image|mimes:png,jpg',
          ]);
          if ($request->file('illustration')) {
            $imagePath      = $request->file('illustration');
            $imageName      = pathinfo($imagePath->getClientOriginalName(), PATHINFO_FILENAME);
            $extension      = $request->file('illustration')->getClientOriginalExtension();
            $fileNames      = explode(",",$imageName);
            $fileEx         = $fileNames[0].'.'.$extension;
            $path           = $request->file('illustration')->move(public_path('images/icons'),$fileEx);
            $str            = str_replace($array, "", $imageName);
            $suggetedTags   = Suggested::create(['tags'=>$str]);
          }
       
        $products = Product::create([
            'name'          =>  $fileEx,
            'image'         =>  $fileNames[0],
            'category_id'   =>  $category->id,
            'tags'          =>  $imageName,
        ]);
        $tags              = DB::table('suggesteds')->where('tags',$imageName)->get();
        $tagsSuggteds      = explode(",",$tags);
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }
    
    public function vectorUpload(Request $request)
    {
        $category          = Category::where('name','vector')->first();
        $request->validate([
            'vector' => 'required|image|mimes:png,svg,eps,ai',
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
        if(isset($products)) {
            return view('icons.drafts',compact('products','tagsSuggteds'));
        }
    }

    public function saveDrafts($id)
    {
        $products = Product::find($id);
        $products->status = 1;
        $products->update();
        return redirect(url('home'));
    }


    public function saveToReview($id)
    {
        $products = Product::find($id);
        $products->status = 3;
        $products->update();
        return redirect(url('home'));
    }
    
    public function iconsDraftShow()
    {
         $products = Product::where('status','1')->whereHas('category',function($q){
             $q->where('name','=','icon');
         })->get();  
        return view('icons.icon-drafts-show',compact('products'));
    
    }
    
    public function photosDraftShow()
    {
         $products = Product::where('status','1')->whereHas('category',function($q){
            $q->where('name','=','photo');
        })->get();    
        return view('illustrations.photo-draft-show',compact('products'));
    
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
        $products      = Product::where(['id'=>$id,'status'=>'1'])->whereHas('category',function($q){
            $q->where('name','=','icon');
        })->first(); 
        $tagsSuggteds  = explode(",",$products->tags); 
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
        return view('illustrations.reviewpacks',compact('products'));
    
    }
    public function vectorReview()
    {
        $products      = Product::where('status','3')->whereHas('category',function($q){
            $q->where('name','=','vector');
        })->get();   
        return view('vectors.reviewpacks',compact('products'));
    
    }



}
