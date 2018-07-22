<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
  public function criarProduto(Request $request){
    $novoProduto = new Produto;

    $novoProduto->codigo = $request->codigo;
    $novoProduto->nome = $request->nome;
    $novoProduto->categoria = $request->categoria;
    $novoProduto->preco = $request->preco;

    $novoProduto->save();
  }

  public function getProduto($id){
    $produto = Produto::findorfail($id);

    return response()->json([$produto]);
  }

    public function atualizarProduto(Request $request,$id){
      $produto = Produto::findorfail($id);

      if($request->codigo){
        $produto->codigo = $request->codigo;
      }
      if($request->nome){
        $produto->nome = $request->nome;
      }
      if($request->categoria){
        $produto->categoria = $request->categoria;
      }
      if($request->preco){
        $produto->preco = $request->preco;
      }

      $produto->save();
    }

    public function deletarProduto($id){
      Produto::destroy($id);
    }

}
