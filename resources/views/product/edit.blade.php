@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <div class="card-header">
            Edit
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form action="" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label>Nombre Producto</label>
                    <input type="text" name="name" class="input" value="">
                </div>
                <div>
                    <label>Precio Unidad</label>
                    <input type="text" name="unit_price" class="input" value="">
                </div>
                <div>
                    <label>Descripción</label>
                    <input type="text" name="description" class="input" value="">
                </div>
                <div>
                    <label>Stock</label>
                    <input type="numeric" name="stock" class="input" value="">
                </div>
                <div>
                    <label>Fecha Entrada Producto</label>
                    <input type="date" name="date_received" class="input" value="">
                </div>
                <div>
                    <label>Proveedor</label>
                    <input type="text" name="supplier_id" class="input" value="">
                </div>
                <div>
                    <button class="button" name="save">Guardar</button>
                    <button class="button" name="cancel">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    @endsection