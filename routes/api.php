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

// Produtos

Route::get('produtos', "App\Http\Controllers\ProdutosController@index");
Route::get('produto/{id}', "App\Http\Controllers\ProdutosController@select");
Route::post('produto', "App\Http\Controllers\ProdutosController@store");
Route::patch('produto/{produto}', "App\Http\Controllers\ProdutosController@update");
Route::delete('produto/{produto}', "App\Http\Controllers\ProdutosController@remove");

// Pedidos

Route::get('pedidos', "App\Http\Controllers\PedidosController@index");
Route::get('pedido/{id}', "App\Http\Controllers\PedidosController@select");
Route::post('pedido', "App\Http\Controllers\PedidosController@store");
Route::patch('pedido/{pedido}', "App\Http\Controllers\PedidosController@update");
Route::delete('pedido/{pedido}', "App\Http\Controllers\PedidosController@remove");

// Vendas

Route::get('mais_vendidos', "App\Http\Controllers\PedidoItemsController@getBestSellers");
Route::get('vendas', "App\Http\Controllers\PedidoItemsController@index");
Route::get('venda/{id}', "App\Http\Controllers\PedidoItemsController@select");
Route::post('venda', "App\Http\Controllers\PedidoItemsController@store");
Route::patch('venda/{pedido_item}', "App\Http\Controllers\PedidoItemsController@update");
Route::delete('venda/{pedido_item}', "App\Http\Controllers\PedidoItemsController@remove");
