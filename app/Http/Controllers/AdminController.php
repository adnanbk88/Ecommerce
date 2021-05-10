<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth') ;
    }
    public function ListeClient()
    {
        $clients=Client::all();
        return view('admin.ListeClient',compact('clients'));
    }
    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect('/admin/ListeClient');
    }
}
