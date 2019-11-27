@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <a href="{{ route('usuario.create') }}"><button>Agregar</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            @foreach($use as $use)
            <tr>
                <td>{{ $use->id }}</td>
                <td>{{ $use->name }}</td>
                <td><a href="{{ route('usuario.show', $use->id) }}">Detalle</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection