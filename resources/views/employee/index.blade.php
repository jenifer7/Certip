@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <a href="{{ route('emplea.create') }}"><button>Agregar</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Posición</td>
                <td>Teléfono</td>
            </tr>
        </thead>
        <tbody>
            @foreach($emple as $emple)
            <tr>
                <td>{{ $emple->id }}</td>
                <td>{{ $emple->fullname }}</td>
                <td>{{ $emple->position }}</td>
                <td>{{ $emple->phone }}</td>
                <td><a href="{{ route('emplea.show', $emple->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection