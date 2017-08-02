<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;

use Validator;
use Response;
use Illuminate\Support\Facades\Input;


class ProdutosController extends Controller
{
    //Pagina Index Lista todos os produtos
    public function index(Request $request){
    	$produtos = Produto::all();
    	return view('produtos.index', compact('produtos'));
    }

    //Função para Adcionar um Novo Produto
    public function inserir(Request $request){
    	$produto = new Produto();
    	$produto->titulo = $request->titulo;
    	$produto->descricao = $request->descricao;
    	$produto->save();
    	return response()->json($produto);
    }

        //Função para Editar um Produto
    public function editar(Request $request){
    	$produto = Produto::find($request->id);
    	$produto->titulo = $request->titulo;
    	$produto->descricao = $request->descricao;
    	$produto->save();
    	return response()->json($produto);
    }


}
