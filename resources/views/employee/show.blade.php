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
                <th>Nombre Completo</th>
                <th>Posición</th>
                <th>Teléfono</th>
                <th>Direccion</th>
                <th>Genero</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $emple->fullname }}</td>
                <td>{{ $emple->position }}</td>
                <td>{{ $emple->phone }}</td>
                <td>{{ $emple->address }}</td>
                <td>{{ $emple->gender }}</td>
                <td>{{ $emple->is_active }}</td>
                <td><a href="{{ route('emplea.edit', $emple->id) }}"><input type="submit" value="Editar"></a></td>
                <td>
                    <form action="{{ route('emplea.destroy', $emple->id) }}" method="post"> 
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <td><a href="{{ route('emplea.index') }}"><input type="submit" value="Regresar"></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection