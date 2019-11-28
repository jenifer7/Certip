@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">Productos</h1>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('pro.create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
    </div>
    <br>
    <table class="table is-hoverable is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <td>Id</td>
                <td>Nombre Producto</td>
                <td>Precio Unidad</td>
                <td>Stock</td>
                <td>Proveedor</td>
                <td></td>
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
                <td><a class="button is-link" href="{{ route('pro.show', $prod->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection