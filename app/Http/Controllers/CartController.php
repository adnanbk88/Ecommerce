<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
    
        $panier_ids=session('panier')  ?? [];
      //   $products = Product::whereIn('id',$panier_ids)->get();
        $products = collect($panier_ids)->map(function ($id)
        {
         return Product::find($id);
        });
        return view('cart',compact('products'));
      
    }
    public function create($id)
    {
        $panier=session('panier')  ?? [];
       // $panier[]=$id;
       array_push($panier,$id);
        session([
            'panier'=> $panier
        ]);
        return redirect('/cart');
    }

    public function delete($id)
    {
        $panier=session('panier')  ?? [];
        $new = array_diff($panier, [$id]);
        session([
            'panier'=> $new
        ]);
        return redirect('/cart');
    }

    public function buy()
    {   
        $panier_ids=session('panier')  ?? [];
        $products = collect($panier_ids)->map(function ($id)
        {
         return Product::find($id);
        });
        return view('buy', compact('products'));
    }
    public function pdf()
    {
        $panier_ids=session('panier')  ?? [];

        $products = collect($panier_ids)->map(function ($id)
        {
         return Product::find($id);
        });

        $pdf = PDF::loadView('pdf',compact('products'));
        return $pdf->download('facture.pdf');
        
    }

    public function order(Request $request)
    {
        $products_ids =session('panier');
        $client = session('client');
        foreach(Product::whereIn('id', $products_ids)->get() as $p){
            $p->inStock = $p->inStock - 1;
            $p->vente +=  1;

            $p->save();
        }
        $order = new Order();
        $order->client_id = $client->id;
        $order->products = json_encode(array_values($products_ids));
        $order->prix = $request->prix;
        $order->save();
        session()->forget('panier');
        return redirect('/merci');
    }

    public function merci()
    {
        return view('merci');
    }
}
