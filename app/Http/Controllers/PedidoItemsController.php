<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoItem;

class PedidoItemsController extends Controller
{
    public function index()
    {
        return PedidoItem::all();
    }

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

    public function update(Request $request, PedidoItem $pedidoItem)
    {

        $pedidoItem->produto_id = $request->input('produto_id');
        $pedidoItem->pedido_id = $request->input('pedido_id');
        $pedidoItem->total = $request->input('total');
        $pedidoItem->quantidade = $request->input('quantidade');

        $pedidoItem->save();

        return $pedidoItem;
    }

    public function remove(PedidoItem $pedidoItem)
    {

        $pedidoItem->delete();

        return response()->json([
            'message' => 'Item excluído com sucesso'
        ]);
    }
}
