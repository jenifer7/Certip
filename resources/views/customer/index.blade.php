@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div class="notification">
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Clientes</h1>
        </div>
    </div>
</div>
<div>
    <a style="text-decoration:none" href="{{ route('cliente.create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
</div>
<br>
    <table class="table is-hoverable is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Telefono</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($custom as $custom)
            <tr>
                <td>{{ $custom->id }}</td>
                <td>{{ $custom->fullname }}</td>
                <td>{{ $custom->phone }}</td>
                <td><a class="button is-link" href="{{ route('cliente.show', $custom->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection