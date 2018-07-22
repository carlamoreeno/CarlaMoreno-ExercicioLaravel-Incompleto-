<?php

use Illuminate\Http\Request;

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

// Rotas para cada método das controllers de Cliente
Route::post('/criarCliente','ClienteController@criarCliente');
Route::get('/getCliente/{id}','ClienteController@getCliente');
Route::put('/atualizarCliente/{id}','ClienteController@atualizarCliente');
Route::delete('/deletarCliente/{id}','ClienteController@deletarCliente');


// Rotas para cada método das controllers de Produto
Route::post('/criarProduto','ProdutoController@criarProduto');
Route::get('/getProduto/{id}','ProdutoController@getProduto');
Route::put('/atualizarProduto/{id}','ProdutoController@atualizarProduto');
Route::delete('/deletarProduto/{id}','ProdutoController@deletarProduto');


// Rotas para cada método das controllers de Categoria
Route::post('/criarCategoria','CategoriaController@criarCategoria');
Route::get('/getCategoria/{id}','CategoriaController@getCategoria');
Route::put('/atualizarCategoria/{id}','CategoriaController@atualizarCategoria');
Route::delete('/deletarCategoria/{id}','CategoriaController@deletarCategoria');


// Rotas para cada método das controllers de Pedido
Route::post('/criarPedido','PedidoController@criarPedido');
Route::get('/getPedido/{id}','PedidoController@getPedido');
Route::put('/atualizarPedido/{id}','PedidoController@atualizarPedido');
Route::delete('/deletarPedido/{id}','PedidoController@deletarPedido');
