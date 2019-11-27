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
            <form action="{{ route('pro.update', $prod->id) }}" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label>Códig</label>
                    <input type="number" name="code" class="input" value="{{ $prod->code }}">
                </div>
                <div>
                    <label>Nombre Producto</label>
                    <input type="text" name="name" class="input" value="{{ $prod->name }}">
                </div>
                <div>
                    <label>Precio Unidad</label>
                    <input type="text" name="unit_price" class="input" value="{{ $prod->unit_price }}">
                </div>
                <div>
                    <label>Descripción</label>
                    <input type="text" name="description" class="input" value="{{ $prod->description }}">
                </div>
                <div>
                    <label>Stock</label>
                    <input type="numeric" name="stock" class="input" value="{{ $prod->stock }}">
                </div>
                <div>
                    <label>Fecha Entrada Producto</label>
                    <input type="date" name="date_received" class="input" value="{{ $prod->date_received }}">
                </div>
                <div>
                    <select name="supplier_id" class="select" id="">
                        @foreach($proveedores as $proveedores)
                        <option value="{{ $proveedores['id'] }}">{{ $proveedores['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="button" name="save">Guardar</button>
                    <button class="button" name="cancel">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    @endsection