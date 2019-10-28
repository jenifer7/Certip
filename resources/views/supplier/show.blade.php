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
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $suppl->name }}</td>
                <td>{{ $suppl->phone }}</td>
                <td>{{ $suppl->address }}</td>
                <td>{{ $suppl->is_active }}</td>
                <td><a href="{{ route('create') }}"><input type="submit" value="Agregar Nuevo"></a></td>
                <td><a href="{{ route('edit', $suppl->id) }}"><input type="submit" value="Editar"></a></td>
                <td>
                    <form action="{{ route('destroy', $suppl->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection