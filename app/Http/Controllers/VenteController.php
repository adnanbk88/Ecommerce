<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function vente()
    {
        $month = now()->month;
        $orders = Order::select('products')->whereMonth('created_at', $month)->get()->pluck('products');
        // Get product that was sold this month
        $products_ids = $orders->transform(function ($item) {
            return json_decode($item);
        })->flatten()->countBy();

        // Get all products
        $products = Product::all();

        // Add a count proprety for each product
        $products->transform(function ($product) use($products_ids) {
            if (array_key_exists($product->id,$products_ids->all())) {
                $product->count = $products_ids->all()["$product->id"];
            }else {
                $product->count = 0;
            }
            return $product;
        });

        return view('admin.vente', compact('products', 'month')); 
    }

    public function filter()
    {
        $month = request()->month;
        $orders = Order::select('products')->whereMonth('created_at', $month)->get()->pluck('products');
        // fonction : trouve tous les produits vendus ce mois
        $products_ids = $orders->transform(function ($item) {
            return json_decode($item);
        })->flatten()->countBy();

    
        $products = Product::all();

       
        $products->transform(function ($product) use($products_ids) {
            if (array_key_exists($product->id,$products_ids->all())) {
                $product->count = $products_ids->all()["$product->id"];
            }else {
                $product->count = 0;
            }
            return $product;
        });

        return view('admin.vente', compact('products', 'month')); 
    }

}