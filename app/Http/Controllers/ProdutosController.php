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

    /**
     * @urlParam id integer required Id of the product you're looking for | Id do produto a ser pesquisado Example: 1
     */
    public function select(Int $id)
    {
        return Produto::where('id', $id)->first();
    }

    /**
     * @bodyParam nome string required Product name | Nome do produto
     * @bodyParam quantidade integer required Amount in stock | Quantidade em estoque
     * @bodyParam preco string required Price for the product | Preço do produto
     */
    public function store(Request $request)
    {

        $produto = Produto::create([
            "nome" => $request->input("nome"),
            "quantidade" => $request->input("quantidade"),
            "preco" => $request->input("preco")
        ]);

        return $produto;
    }

    /**
     * @urlParam produto integer required Id of the product you're updating | Id do produto a ser atualizado No-example
     * @bodyParam nome string required New product name | Novo nome do produto
     * @bodyParam quantidade integer required New amount in stock | Nova quantidade em estoque
     * @bodyParam preco string required New price for the product | Novo preço do produto
     */
    public function update(Request $request, Produto $produto)
    {

        $produto->nome = $request->input('nome');
        $produto->quantidade = $request->input('quantidade');
        $produto->preco = $request->input('preco');

        $produto->save();

        return $produto;
    }

    /**
     * @urlParam produto integer required Id of the product you're removing | Id do produto a ser removido No-example
     */
    public function remove(Produto $produto)
    {

        $produto->delete();

        return response()->json([
            'message' => 'Produto excluído com sucesso'
        ]);
    }
}
