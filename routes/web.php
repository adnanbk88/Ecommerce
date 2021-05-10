<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//AUTHENTIFICATION ROUTE 
Auth::routes();


// ADMINISTRATEUR Route  : 
Route::get('/admin', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/admin/ListeClient', [App\Http\Controllers\AdminController::class, 'ListeClient']);
Route::delete('/admin/ListeClient/{id}', [App\Http\Controllers\AdminController::class, 'delete']);
Route::get('admin/{id}/edite', [App\Http\Controllers\ProductController::class, 'edite']);
Route::put('admin/{id}/edite', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/admin/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('/admin/orders', [App\Http\Controllers\ProductController::class, 'orders']);
Route::get('/admin/vente', [App\Http\Controllers\VenteController::class, 'vente']);
Route::post('/admin/vente', [App\Http\Controllers\VenteController::class, 'filter']);
Route::post('/admin/create', [App\Http\Controllers\ProductController::class, 'store']);
Route::delete('/admin/{id}', [App\Http\Controllers\ProductController::class, 'delete']);




// Route page home && phomme && pfemme

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/pdf', [App\Http\Controllers\CartController::class, 'pdf']);
Route::get('/phomme', [App\Http\Controllers\HomeController::class, 'phomme']);
Route::get('/pfemme', [App\Http\Controllers\HomeController::class, 'pfemme']);
Route::get('/single/{id}', [App\Http\Controllers\HomeController::class, 'show']);



// Route client 

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::post('/addToCart/{id}', [App\Http\Controllers\CartController::class, 'create']);
Route::post('/deleteFromCart/{id}', [App\Http\Controllers\CartController::class, 'delete']);
Route::get('/buy', [App\Http\Controllers\CartController::class, 'buy']);

Route::post('/order', [App\Http\Controllers\CartController::class, 'order']);
Route::get('/merci', [App\Http\Controllers\CartController::class, 'merci']);



Route::post('/client/create', [App\Http\Controllers\ClientController::class, 'create']);


Route::get('/inscrire', [App\Http\Controllers\ClientController::class, 'inscrire']);
Route::get('/authClient', [App\Http\Controllers\ClientController::class, 'authClient']);
Route::post('/authClient', [App\Http\Controllers\ClientController::class, 'seconnecter']);
Route::view('/client/login',"E-client");
Route::post('/client/login', [App\Http\Controllers\ClientController::class, 'login']);
Route::get('/client/orders', [App\Http\Controllers\ClientController::class, 'orders']);
Route::get('/client/InfoClient', [App\Http\Controllers\ClientController::class, 'Infoclient']);
Route::post('/client/orders/{id}/confirm', [App\Http\Controllers\ClientController::class, 'confirmOrder']);

