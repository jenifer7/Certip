@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <table class="table">
        <thead>
            <tr>
                <td>Fecha Venta</td>
                <td>Cliente</td>
                <td>Total Venta</td>
            </tr>
        </thead>
        <tbody>
            @foreach($venta as $venta)
            <tr>
                <td>{{ $venta->date_sale }}</td>
                <td>{{ $venta->fullname }}</td>
                <td>{{ $venta->total_sales }}</td>
                <td><a href="">Detalle</a></td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

@endsection