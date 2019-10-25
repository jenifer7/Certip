@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <form action="" class="form" method="post">
    @csrf 
    <div>
        <label>Nombre Producto</label>
        <input type="text" name="name" class="input">
    </div>
    <div>
        <label>Precio Unidad</label>
        <input type="text" name="unit_price" class="input">
    </div>
    <div>
        <label>Descripción</label>
        <input type="text" name="description" class="input">
    </div>
    <div>
        <label>Cantidad Disponible</label>
        <input type="text" name="stock" class="input">
    </div>
    <div>
        <label>Fecha Entrada Producto</label>
        <input type="text" name="date_received" class="input">
    </div>
    <div>
        <label>Proveedor</label>
        <input type="text" name="supplier_id" class="input">
    </div>
    <div>
        <button class="button" name="save">Guardar</button>
        <button class="button" name="cancelar">Cancelar</button>
    </div>
    </form>
</div>

@endsection