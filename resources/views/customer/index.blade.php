@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre Completo</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>NIT</td>
                <td>Estado</td>
            </tr>
        </thead>
        <tbody>
            @foreach($custom as $custom)
            <tr>
                <td>{{ $custom->id }}</td>
                <td>{{ $custom->fullname }}</td>
                <td>{{ $custom->phone }}</td>
                <td>{{ $custom->address }}</td>
                <td>{{ $custom->nit }}</td>
                <td>{{ $custom->is_active }}</td>
                <td><a href="">Detalle</a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

@endsection