<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidosController extends Controller
{

    public function index()
    {
        return Pedido::all();
    }

    public function select(Int $id)
    {
        return Pedido::where('id', $id)->first();
    }

    public function store(Request $request)
    {

        $pedido = Pedido::create([
            "total" => $request->input("total"),
            "data" => $request->input("data")
        ]);

        return $pedido;
    }

    public function update(Request $request, Pedido $pedido)
    {

        $pedido->total = $request->input('total');
        $pedido->data = $request->input('data');

        $pedido->save();

        return $pedido;
    }

    public function remove(Pedido $pedido)
    {

        $pedido->delete();

        return response()->json([
            'message' => 'Pedido excluído com sucesso'
        ]);
    }
}
