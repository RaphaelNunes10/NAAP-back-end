<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Pedidos

Route::get('pedidos', "App\Http\Controllers\PedidosController@index");
Route::get('pedido/{id}', "App\Http\Controllers\PedidosController@select");
Route::post('pedido', "App\Http\Controllers\PedidosController@store");
Route::patch('pedidos/{pedido}', "App\Http\Controllers\PedidosController@update");
Route::delete('pedidos/{pedido}', "App\Http\Controllers\PedidosController@remove");

// Produtos

Route::get('produtos', "App\Http\Controllers\ProdutosController@index");
Route::get('produto/{id}', "App\Http\Controllers\ProdutosController@select");
Route::get('mais_vendidos', "App\Http\Controllers\ProdutosController@getBestSellers");
Route::post('produto', "App\Http\Controllers\ProdutosController@store");
Route::patch('produtos/{produto}', "App\Http\Controllers\ProdutosController@update");
Route::delete('produtos/{produto}', "App\Http\Controllers\ProdutosController@remove");

// Items

Route::get('items', "App\Http\Controllers\PedidoItemsController@index");
Route::get('item/{id}', "App\Http\Controllers\PedidoItemsController@select");
Route::post('item', "App\Http\Controllers\PedidoItemsController@store");
Route::patch('items/{pedido_item}', "App\Http\Controllers\PedidoItemsController@update");
Route::delete('items/{pedido_item}', "App\Http\Controllers\PedidoItemsController@remove");
