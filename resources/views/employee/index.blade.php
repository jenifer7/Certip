@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">Empleados</h1>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('emplea.create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
    </div>
    <br>
    <table class="table is-hoverable is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Posición</td>
                <td>Teléfono</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($emple as $emple)
            <tr>
                <td>{{ $emple->id }}</td>
                <td>{{ $emple->fullname }}</td>
                <td>{{ $emple->position }}</td>
                <td>{{ $emple->phone }}</td>
                <td><a class="button is-link" href="{{ route('emplea.show', $emple->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection