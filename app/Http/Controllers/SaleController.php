<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::get();
        echo view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Sale::create($data);
        return to_route('sales.index')->with('status','Venta Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        echo view('sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        // Validar que los ids proporcionados existen en las tablas correspondientes
    $validatedData = $request->validate([
        'id_client' => 'required|exists:clients,id',
        'id_product' => 'required|exists:products,id',
        // Añade validaciones adicionales según sea necesario
    ]);

    // Actualizar la venta con los datos validados
    $sale->update($validatedData);

    return to_route('sales.index')->with('status', 'Venta Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return to_route('sales.index')->with('status','Venta Eliminada');
    }
}
