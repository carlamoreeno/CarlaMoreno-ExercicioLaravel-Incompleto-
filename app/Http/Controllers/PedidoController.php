<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class PedidoController extends Controller
{
  public function criarPedido(Request $request){
    $novoPedido = new Pedido;

    $novoPedido->numero = $request->numero;
    $novoPedido->data = $request->data;
    $novoPedido->cod_cliente = $request->cod_cliente;

    $novoPedido->save();
  }

  public function getPedido($id){
    $pedido = Pedido::findorfail($id);

    return response()->json([$pedido]);
  }

  public function atualizarPedido(Request $request,$id){
    $pedido = Pedido::findorfail($id);

    if($request->numero){
      $pedido->numero = $request->numero;
    }
    if($request->data){
      $pedido->data = $request->data;
    }
    if($request->cod_cliente){
      $pedido->cod_cliente = $request->cod_cliente;
    }

    $pedido->save();
  }

  public function deletarPedido($id){
    Pedido::destroy($id);
  }
}
