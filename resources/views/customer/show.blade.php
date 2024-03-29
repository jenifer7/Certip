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
            <h1 class="title is-1">Cliente</h1>
        </div>
    </div>
</div>
<br>
<div>
    <table class="table is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <th>Nombre Completo</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>NIT</th>
                <th>Estado</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $custom->fullname }}</td>
                <td>{{ $custom->phone }}</td>
                <td>{{ $custom->address }}</td>
                <td>{{ $custom->nit }}</td>
                <td>{{ $custom->is_active }}</td>
                <td><a href="{{ route('cliente.edit', $custom->id) }}"><input type="submit" class="button is-info" value="Editar"></a></td>
                <td>
                    <form action="{{ route('cliente.destroy', $custom->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input class="button is-danger" type="submit" value="Borrar">
                    </form>
                </td>
                <td><a href="{{ route('cliente.index') }}"><input class="button is-dark" type="submit" value="Regresar"></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection