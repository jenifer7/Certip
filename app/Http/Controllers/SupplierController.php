<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Listado de proveedores
     */
    public function index()
    {
        $suppl = Supplier::all();
        return view('supplier.index', compact('suppl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * formulario para crear uno nuevo
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * Guarda el nuevo proveedor en la base de datos
     */
    public function store(Request $request)
    {
        $suppl = Supplier::create($request->all());
        return redirect('suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     * 
     * muestra un proveedor especifico identificado por id
     */
    public function show($id)
    {
        $suppl = Supplier::find($id);
        return view('supplier.show', compact('suppl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     * 
     * muestra el formulario para editar un dato que ya exite
     */
    public function edit($id)
    {
        $suppl = Supplier::find($id);
        return view('supplier.edit', compact('suppl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     * 
     * guarda los cambios que se hacen en el fomulario
     * edit
     */
    public function update(Request $request, $id)
    {
        $suppl = Supplier::find($id);
        $suppl->update($request->all());
        return view('supplier.show', compact('suppl'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     * 
     * eliminar un registro
     */
    public function destroy($id)
    {
        $suppl = Supplier::find($id);
        $suppl->delete();
        
        return redirect('suppliers');
    }
}
