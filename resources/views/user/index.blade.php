@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Usuarios</h1>
        </div>
    </div>
</div>
<div>
    <a href="{{ route('usuario.create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
</div>
<br>
    <table class="table is-hoverable is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($use as $use)
            <tr>
                <td>{{ $use->id }}</td>
                <td>{{ $use->name }}</td>
                <td><a class="button is-link" href="{{ route('usuario.show', $use->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection