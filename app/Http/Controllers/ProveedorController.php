<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();

        return dd($proveedores);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Proveedor $proveedor)
    {
        //
    }

    public function edit(Proveedor $proveedor)
    {
        //
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    public function destroy(Proveedor $proveedor)
    {
        //
    }
}