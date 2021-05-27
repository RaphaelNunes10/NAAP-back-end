<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoItem;
use Illuminate\Support\Facades\DB;

class PedidoItemsController extends Controller
{
    public function index()
    {
        return PedidoItem::all();
    }

    /**
     * @urlParam id integer required Id of the sale you're looking for | Id da venda a ser pesquisada Example: 1
     */
    public function select(Int $id)
    {
        return PedidoItem::where('id', $id)->first();
    }

    public function getBestSellers()
    {
        return
            DB::table("pedido_items")
            ->select("produtos.nome", DB::raw("count(*) as vendas"))
            ->join("produtos", "pedido_items.produto_id", "=", "produtos.id")
            ->orderBy("vendas", "desc")
            ->groupBy("produtos.nome")
            ->get();
    }

    /**
     * @bodyParam produto_id integer required Product's id | Id do produto
     * @bodyParam pedido_id integer required Order's id | Id do pedido
     * @bodyParam total string required Sale's total | Total da venda
     * @bodyParam quantidade integer required Amount of products bought | Quantidade de produtos comprados
     */
    public function store(Request $request)
    {

        $pedidoItem = PedidoItem::create([
            "produto_id" => $request->input("produto_id"),
            "pedido_id" => $request->input("pedido_id"),
            "total" => $request->input("total"),
            "quantidade" => $request->input("quantidade")
        ]);

        return $pedidoItem;
    }

    /**
     * @urlParam pedidoItem integer required Id of the sale you're updating | Id da venda a ser atualizada No-example
     * @bodyParam produto_id integer required New product's id | Novo id do produto
     * @bodyParam pedido_id integer required New order's id | Novo id do pedido
     * @bodyParam total string required New sale's total | Novo total da venda
     * @bodyParam quantidade integer required New amount of products bought | Nova quantidade de produtos comprados
     */
    public function update(Request $request, PedidoItem $pedidoItem)
    {

        $pedidoItem->produto_id = $request->input('produto_id');
        $pedidoItem->pedido_id = $request->input('pedido_id');
        $pedidoItem->total = $request->input('total');
        $pedidoItem->quantidade = $request->input('quantidade');

        $pedidoItem->save();

        return $pedidoItem;
    }

    /**
     * @urlParam pedidoItem integer required Id of the sale you're removing | Id da venda a ser removida No-example
     */
    public function remove(PedidoItem $pedidoItem)
    {

        $pedidoItem->delete();

        return response()->json([
            'message' => 'Item excluído com sucesso'
        ]);
    }
}
