@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <a href="{{ route('pro.create') }}"><button>Agregar</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Producto</td>
                <td>Precio Unidad</td>
                <td>Stock</td>
                <td>Proveedor</td>
            </tr>
        </thead>
        <tbody>
            @foreach($prod as $prod)
            <tr>
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->unit_price }}</td>
                <td>{{ $prod->stock }}</td>
                <td>{{ $prod->supplier->name }}</td>
                <td><a href="{{ route('pro.show', $prod->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection