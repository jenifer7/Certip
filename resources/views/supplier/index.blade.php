@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')
<style>
    .hero {
        border-radius: 3px;
    }
</style>
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Proveedores</h1>
        </div>
    </div>
</div>
<div>
    <div>
        <a href="{{ route('create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
    </div>
    <br>
    <table class="table is-hoverable is-fullwidth">
        <thead style="background-color: #A9D0F5">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Telefono</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach($suppl as $suppl)
            <tr>
                <td>{{ $suppl->id }}</td>
                <td>{{ $suppl->name }}</td>
                <td>{{ $suppl->phone }}</td>
                <td><a class="button is-link" href="{{ route('show', $suppl->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection