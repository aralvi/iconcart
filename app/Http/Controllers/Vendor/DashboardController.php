<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class DashboardController extends Controller
{

    public function index()
    {
        $icons  = Product::whereIn('status',['0','1'])->whereHas('category', function($q){
             $q->where('name', '=', 'icon');
        })->get();
        $photos   = Product::whereIn('status',['0','1'])->whereHas('category', function($q){
           $q->where('name', '=', 'photo');
        })->get();
        $vectors  = Product::whereIn('status',['0','1'])->whereHas('category', function($q){
            $q->where('name', '=', 'illustration');
        })->get();
      return view('home',compact('icons','photos','vectors'));
    }

    public function  iconsCounter()
    {
        $icons    = Product::whereIn('status',[0,1])->whereHas('category', function($q){
            $q->where('name', '=', 'icon');
       })->get();
        $reviews  = Product::where('status',3)->whereHas('category', function($q){
          $q->where('name', '=', 'icon');
       })->get();         return view('icons.icon',compact('icons','reviews'));
    }

    public function  photoCounter()
    {
        $photos    = Product::whereIn('status',[0,1])->whereHas('category', function($q){
            $q->where('name', '=', 'photo');
       })->get();
        $reviews  = Product::where('status',3)->whereHas('category', function($q){
            $q->where('name', '=', 'photo');
       })->get();         return view('photos.illustrations',compact('photos','reviews'));
    }

    public function  vectorCounter()
    {
        $vectors    = Product::whereIn('status',['0','1'])->whereHas('category', function($q){
            $q->where('name', '=', 'illustration');
       })->get();
        $reviews  = Product::where('status',3)->whereHas('category', function($q){
            $q->where('name', '=', 'illustration');
       })->get();
        return view('vectors.vector',compact('vectors','reviews'));
    }
}
