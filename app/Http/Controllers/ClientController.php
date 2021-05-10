<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "password" => "required",
            "adresse" => "required",
            "numero" => "required"
        ]);
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->numero = $request->numero;
        $client->save();
        session([
            'client' => $client
        ]);
        return redirect('/buy');
    }

    public function authClient()
    {
        return view('/authClient');
    }
    public function seconnecter(Request $request)
    {
        $client = Client::where('email', $request->email)->first();
        if ($request->password === $client->password) {
            session([
                'client' => $client
            ]);
            return redirect('/buy');
        } else {
            return redirect('/authClient');
        }
    }
    public function inscrire()
    {
        return view('inscrire');
    }
    public function login(Request $request)
    {
        $client = Client::where('email', $request->email)->first();
        if ($request->password === $client->password) {
            session([
                'client' => $client
            ]);
            return redirect('/client/orders');
        } else {
            return redirect('/client/login');
        }
    }
    public function orders()
    {
        if (session()->has('client')) {
            $orders = Order::where('client_id', session('client')->id)->get();
            foreach($orders as $order){
                $order->products = collect(json_decode($order->products))->map(function ($id)
                {
                 return Product::find($id);
                });
            }
             
            return view('myOrders',compact('orders')) ;
        } else {
            return redirect('/client/login');
        }
    }
    public function confirmOrder($id)
    {
        $order = Order::find($id);
        $order->livraison = 1;
        $order->save();
        return back();
    }

    public function InfoClient ()
    {
        $clients=Client::all();
        return view('InfoClient',compact('clients'));
    }
    
}
