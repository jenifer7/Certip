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
            <h1 class="title is-1">Proveedor</h1>
        </div>
    </div>
</div>
<div class="notification">
    <table class="table is-fullwidth">
        <thead>
            <tr>
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
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->unit_price }}</td>
                <td>{{ $prod->description }}</td>
                <td>{{ $prod->stock }}</td>
                <td>{{ $prod->date_received }}</td>
                <td>{{ $prod->supplier_id }}</td>
                <td><a href=""><input type="submit" value="Editar"></a></td>
                <td>
                    <form action="" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <td><a href=""><input type="submit" value="Regresar"></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection