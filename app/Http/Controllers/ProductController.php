<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "titre" => "required",
            "price" => "required",
            "description" => "required",
            "inStock" => "required",
            "category" => "required"
        ]);
        $product = new Product();
        $product->title = $request->titre;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $product->image = $fileNameToStore;
        }
        $product->description = $request->description;
        $product->inStock = $request->inStock;
        $product->category_id = $request->category;
        $product->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('single', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edite($id)
    {
        $product = Product::find($id);
        return view('admin.edite', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "titre" => "required",
            "price" => "required",
            "description" => "required",
            "inStock" => "required",
            "category" => "required"
        ]);
        $product = Product::find($id);
        $product->title = $request->titre;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $product->image = $fileNameToStore;
        }
        $product->description = $request->description;
        $product->inStock = $request->inStock;
        $product->category_id = $request->category;
        $product->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }



    public function orders()
    {
        $orders = Order::all();
        return view('admin.orders', compact('orders'));
    }

   
}
