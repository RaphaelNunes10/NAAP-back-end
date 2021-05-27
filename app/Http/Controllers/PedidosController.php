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

    /**
     * @urlParam id integer required Id of the order you're looking for | Id do pedido a ser pesquisado Example: 1
     */
    public function select(Int $id)
    {
        return Pedido::where('id', $id)->first();
    }

    /**
     * @bodyParam total string Order's total value | Valor total do pedido required
     * @bodyParam data string Date and time of the requested order (ISO format) | Data e hora em que o pedido foi efetuado (formato ISO) required
     */
    public function store(Request $request)
    {

        $pedido = Pedido::create([
            "total" => $request->input("total"),
            "data" => $request->input("data")
        ]);

        return $pedido;
    }

    /**
     * @urlParam pedido integer required Id of the order you're updating | Id do pedido a ser atualizado No-example
     * @bodyParam total string New order's total value | Novo valor total do pedido required
     * @bodyParam data string New date and time of the requested order (ISO format) | Nova data e hora em que o pedido foi efetuado (formato ISO) required
     */
    public function update(Request $request, Pedido $pedido)
    {

        $pedido->total = $request->input('total');
        $pedido->data = $request->input('data');

        $pedido->save();

        return $pedido;
    }

    /**
     * @urlParam pedido integer required Id of the order you're removing | Id do pedido a ser removido No-example
     */
    public function remove(Pedido $pedido)
    {

        $pedido->delete();

        return response()->json([
            'message' => 'Pedido excluído com sucesso'
        ]);
    }
}
