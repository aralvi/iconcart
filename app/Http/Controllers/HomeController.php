<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', 'verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $icons    = Product::where('type','icon')->get(); 
        $photos   = Product::where('type','photo')->get();    
        $vectors  = Product::where('type','vector')->get();   
        return view('home', compact('icons'))->withData(null);
        // return view('home');
    }
}
