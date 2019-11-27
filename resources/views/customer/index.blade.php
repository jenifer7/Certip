@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div class="notification">
    <div>
        <a href="{{ route('cliente.create') }}"><button>Agregar</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Telefono</td>
            </tr>
        </thead>
        <tbody>
            @foreach($custom as $custom)
            <tr>
                <td>{{ $custom->id }}</td>
                <td>{{ $custom->fullname }}</td>
                <td>{{ $custom->phone }}</td>
                <td><a href="{{ route('cliente.show', $custom->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection