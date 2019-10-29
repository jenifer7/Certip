@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Posición</td>
                <td>Teléfono</td>
                <td>Direccion</td>
                <td>Género</td>
                <td>Estado</td>
                <td>Id Usuario</td>
            </tr>
        </thead>
        <tbody>
            @foreach($emple as $emple)
            <tr>
                <td>{{ $emple->id }}</td>
                <td>{{ $emple->fullname }}</td>
                <td>{{ $emple->position }}</td>
                <td>{{ $emple->phone }}</td>
                <td>{{ $emple->address }}</td>
                <td>{{ $emple->gender }}</td>
                <td>{{ $emple->is_active }}</td>
                <td>{{ $emple->user_id }}</td>
                <td><a href="{{ route('emplea.show', $emple->id) }}">Detalle</a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

@endsection