@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Crear Nuevo Producto</h1>
        </div>
    </div>
</div>
<div>
    <form action="{{ route('pro.store') }}" class="form" method="post">
        @csrf
        <div>
            <label class="label">Codigo</label>
            <input type="number" name="code" class="input">
        </div>
        <div>
            <label class="label">Nombre Producto</label>
            <input type="text" name="name" class="input">
        </div>
        <div>
            <label class="label">Precio Unidad</label>
            <input type="decimal" name="unit_price" class="input">
        </div>
        <div>
            <label class="label">Descripción</label>
            <input type="text" name="description" class="input">
        </div>
        <div>
            <label class="label">Stock</label>
            <input type="text" name="stock" class="input">
        </div>
        <div>
            <label class="label">Fecha Entrada Producto</label>
            <input type="date" name="date_received" class="input">
        </div>
        <br>
        <label class="label" for="">Proveedor</label>
        <div class="select">
            <select name="supplier_id" class="select" id="">
                @foreach($proveedores as $proveedores)
                <option value="{{ $proveedores['id'] }}">{{ $proveedores['name'] }}</option>
                @endforeach
            </select>
        </div>
       <hr>
        <div>
            <button class="button is-success" name="save">Guardar</button>
            <a href="{{route('pro.index')}}" class="button is-warning" name="cancel">Cancelar</a>
        </div>
    </form>
</div>

@endsection