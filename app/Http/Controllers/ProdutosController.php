<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Produto;

class ProdutosController extends Controller
{
    public function index(Request $request){
    	$produtos = Produto::all();
    	
    	return view('produtos.index', compact('produtos'));
    }
}
