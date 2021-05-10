<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Product::all();
        return view('index',compact('products'));
    }
    public function orders()
    {
        return view('admin.orders');
    }
    
    public function phomme()
    {
        $products=Product::where('category_id',1)->get();

        return view('phomme',compact('products'));
    }
    public function pfemme()
    {
        $products=Product::where('category_id',2)->get();
        return view('pfemme',compact('products'));
    }
    
    public function show($id)
    {
        $product=Product::find($id);
        return view('single',['product'=>$product]);
    }
   
}
