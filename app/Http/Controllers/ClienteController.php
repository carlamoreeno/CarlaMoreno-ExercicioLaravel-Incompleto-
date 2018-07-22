<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ClienteController extends Controller
{
  public function criarCliente(Request $request){
    $novoCliente = new Cliente;

    $novoCliente->codigo = $request->codigo;
    $novoCliente->nome = $request->nome;
    $novoCliente->endereco = $request->endereco;
    $novoCliente->telefone = $request->telefone;
    $novoCliente->status = $request->status;
    $novoCliente->limitecredito = $request->limitecredito;

    $novoCliente->save();
  }

  public function getCliente($id){
    $cliente = Cliente::findorfail($id);

    return response()->json([$cliente]);
  }

  public function atualizarCliente(Request $request,$id){
    $cliente = Cliente::findorfail($id);

    if($request->codigo){
      $cliente->codigo = $request->codigo;
    }
    if($request->nome){
      $cliente->nome = $request->nome;
    }
    if($request->endereco){
      $cliente->endereco = $request->endereco;
    }
    if($request->telefone){
      $cliente->telefone = $request->telefone;
    }
    if($request->status){
      $cliente->status = $request->status;
    }
    if($request->limitecredito){
      $cliente->limitecredito = $request->limitecredito;
    }

    $cliente->save();
  }

  public function deletarCliente($id){
    Cliente::destroy($id);
  }

}
