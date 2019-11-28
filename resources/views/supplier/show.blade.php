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
<br>
<div>
    <table class="table is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $suppl->name }}</td>
                <td>{{ $suppl->phone }}</td>
                <td>{{ $suppl->address }}</td>
                <td>{{ $suppl->is_active }}</td>
                <td><a href="{{ route('edit', $suppl->id) }}"><input class="button is-info" type="submit" value="Editar"></a></td>
                <td>
                    <form action="{{ route('destroy', $suppl->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input class="button is-danger" type="submit" value="Borrar">
                    </form>
                </td>
                <td><a href="{{ route('index') }}"><input type="submit" class="button is-dark" value="Regresar"></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection