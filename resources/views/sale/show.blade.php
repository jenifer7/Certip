@extends('layouts.layout')
@section('title','Bienvenido!')

@section('content')
<style>
    .hero {
        border-radius: 3px;
    }
</style>

<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2">Venta</h1>
        </div>
    </div>
</div>
<br>
<div>
    <label class="label" for="nombre">Cliente</label>
    <span><p>{{ $venta->fullname }}</p></span>
</div>
<br>
<div class="">
    <div class="">
        <!-- <div>
            <label for="estado">Estado</label>
            <input type="text" value="">
        </div> -->
        <div class="">
            <div class="">
                <table id="detalles" class="table is-fullwidth">
                    <thead style="background-color: #A9D0F5">
                        <th>Productos</th>
                        <th>Cantidad</th>
                        <th>Precio venta</th>
                        <th>Subtotal</th>
                    </thead>
                    <tfoot>
                        <th>TOTAL</th>
                        <th></th>
                        <th></th>
                        <th>
                            <h4 id="total">{{$venta -> total_sales}}</h4>
                        </th>
                    </tfoot>
                    <tbody>
                        @foreach($detalles as $detalles)
                        <tr>
                            <td>{{$detalles -> pro}}</td>
                            <td>{{$detalles -> quantity}}</td>
                            <td>{{$detalles -> price}}</td>
                            <td>{{$detalles -> quantity * $detalles -> price}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection