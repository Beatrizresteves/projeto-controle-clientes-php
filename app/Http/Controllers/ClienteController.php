<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;
        $cliente->placa_carro = $request->placa_carro;
        $cliente->save();

        return response()->json($cliente, 201);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;
        $cliente->placa_carro = $request->placa_carro;
        $cliente->save();

        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return response()->json($cliente, 200);
    }

    public function searchByPlaca($numero)
    {
        $clientes = Cliente::where('placa_carro', 'like', '%' . $numero)->get();

        return response()->json($clientes, 200);
    }
}
