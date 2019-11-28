@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div class="column is-full">
    <div class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">Ventas</h1>
            </div>
        </div>
    </div>
    <div>
        <a href="{{ route('sale.create') }}"><button class="button is-dark is-outlined">Agregar</button></a>
    </div>
    <br>
    <div>
        <table class="table is-hoverable is-fullwidth">
            <thead style="background-color: #A9D0F5">
                <tr>
                    <td>Fecha Venta</td>
                    <td>Cliente</td>
                    <td>Total Venta</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($venta as $venta)
                <tr>
                    <td>{{ $venta->date_sale }}</td>
                    <td>{{ $venta->fullname }}</td>
                    <td>{{ $venta->total_sales }}</td>
                    <td><a class="button is-link" href="{{ route('sale.show', $venta->id) }}">Detalle</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection