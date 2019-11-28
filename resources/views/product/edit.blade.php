@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Producto</h1>
                </div>
            </div>
        </div>
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
                    <label class="label">Códig</label>
                    <input type="number" name="code" class="input" value="{{ $prod->code }}">
                </div>
                <div>
                    <label class="label">Nombre Producto</label>
                    <input type="text" name="name" class="input" value="{{ $prod->name }}">
                </div>
                <div>
                    <label class="label">Precio Unidad</label>
                    <input type="text" name="unit_price" class="input" value="{{ $prod->unit_price }}">
                </div>
                <div>
                    <label class="label">Descripción</label>
                    <input type="text" name="description" class="input" value="{{ $prod->description }}">
                </div>
                <div>
                    <label class="label">Stock</label>
                    <input type="numeric" name="stock" class="input" value="{{ $prod->stock }}">
                </div>
                <div>
                    <label class="label">Fecha Entrada Producto</label>
                    <input type="date" name="date_received" class="input" value="{{ $prod->date_received }}">
                </div>
                <label class="label" for="">Proveedor</label>
                <div>
                    <select name="supplier_id" class="select" id="">
                        @foreach($proveedores as $proveedores)
                        <option value="{{ $proveedores['id'] }}">{{ $proveedores['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button class="button is-success" name="save">Guardar</button>
                    <a href="{{route('pro.show', $prod->id)}}" class="button is-warning" name="cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    @endsection