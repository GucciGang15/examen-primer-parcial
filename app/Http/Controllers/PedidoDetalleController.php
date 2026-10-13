<?php

namespace App\Http\Controllers;

use App\Models\PedidoDetalle;
use Illuminate\Http\Request;

class PedidoDetalleController extends Controller
{
    public function index()
    {
        $pedidoDetalles = PedidoDetalle::all();

        return dd($pedidoDetalles);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(PedidoDetalle $pedidoDetalle)
    {
        //
    }

    public function edit(PedidoDetalle $pedidoDetalle)
    {
        //
    }

    public function update(Request $request, PedidoDetalle $pedidoDetalle)
    {
        //
    }

    public function destroy(PedidoDetalle $pedidoDetalle)
    {
        //
    }
}