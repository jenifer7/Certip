@extends('layouts.layout')
@section('title','Bienvenido!')

@section('content')
<style>
    .hero {
        border-radius: 3px;
    }
</style>
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Producto</h1>
        </div>
    </div>
</div>
<div>
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre Producto</th>
                <th>Precio Unidad</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Fecha Entrada Producto</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $prod->code }}</td>
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->unit_price }}</td>
                <td>{{ $prod->description }}</td>
                <td>{{ $prod->stock }}</td>
                <td>{{ $prod->date_received }}</td>
                <td>{{ $prod->supplier->name }}</td>
                <td><a href="{{ route('pro.edit', $prod->id) }}"><input type="submit" value="Editar"></a></td>
                <td>
                    <form action="{{ route('pro.destroy', $prod->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <td><a href="{{ route('pro.index') }}"><input type="submit" value="Regresar"></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection