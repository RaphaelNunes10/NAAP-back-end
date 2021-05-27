<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function getBestSellers()
    {
    }

    public function store(Request $request)
    {

        $produto = Produto::create([
            "nome" => $request->input("nome"),
            "quantidade" => $request->input("quantidade"),
            "preco" => $request->input("preco")
        ]);

        return $produto;
    }

    public function update(Request $request, Produto $produto)
    {

        $produto->nome = $request->input('nome');
        $produto->quantidade = $request->input('quantidade');
        $produto->preco = $request->input('preco');

        $produto->save();

        return $produto;
    }

    public function remove(Produto $produto)
    {

        $produto->delete();

        return response()->json([
            'message' => 'Produto excluído com sucesso'
        ]);
    }
}
