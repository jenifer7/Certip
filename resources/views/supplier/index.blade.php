@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>
            @foreach($suppl as $suppl)
            <tr>
                <td>{{ $suppl->id }}</td>
                <td>{{ $suppl->name }}</td>
                <td>{{ $suppl->phone }}</td>
                <td>{{ $suppl->address }}</td>
                <td>{{ $suppl->is_active }}</td>
                <td><a href="{{ route('show', $suppl->id) }}">Detalle</a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

@endsection