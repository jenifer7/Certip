@extends('layouts.layout')

@section('title', 'Ventas!!')
@section('content')

<div class="card uper">
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
    </div>
</div>
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Crear Nueva Venta</h1>
        </div>
    </div>
</div>
<div>
    <form action="" class="form" method="post">
        @csrf
        <div>
            <label class="label">Fecha Venta</label>
            <input class="input" value="{{$fecha}}" name="date_sale" type="text" id="date_sale" placeholder="Fecha">
        </div>
        <br>
        <label class="label" for="user_id">Vendedor</label>
        <div class="control">
            <select name="user_id" class="input" id="user_id">
                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
            </select>
        </div>
        <label class="label" for="">Cliente</label>
        <div class="select">
            <select class="" name="customer_id" class="select" id="idcliente">
                @foreach($cliente as $cliente )
                <option value="{{ $cliente->id }}">{{ $cliente->fullname }}</option>
                @endforeach
            </select>
        </div>
        <label class="label" for="">Producto</label>
        <div class="select">
            <select class="" name="idpro" id="idpro">
                @foreach($productos as $producto)
                <option value="{{$producto->id}}_{{$producto->stock}}_{{$producto->unit_price}}">
                    {{ $producto->producto }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="label" for="stock">Stock</label>
            <input class="input" name="stock" id="stock" type="number">
        </div>
        <div>
            <label class="label" for="quantity">Cantidad</label>
            <input class="input" name="quantity" id="quantity" type="number">
        </div>
        <div>
            <label class="label" for="unit_price">Precio Venta</label>
            <input class="input" type="number" name="unit_price" id="unit_price">
        </div>
        <br>
        <div class="field">
            <div class="control">
                <!-- <button id="add">Agregar</button> -->
                <a id="add"><input class="button is-dark is-outlined" type="button" value="Agregar"></a>
            </div>
        </div>
        <hr>
        <div>
            <table id="detalles" class="table is-fullwidth">
                <thead style="background-color: #A9D0F5">
                    <th></th>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Precio Venta</th>
                    <th>SubTotal</th>
                </thead>
                <tfoot>
                    <th>TOTAL</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                        <h4 id="total">Q/. 0.00</h4><input type="hidden" name="total_sales" id="total_sales">
                    </th>
                </tfoot>
                <tbody>

                </tbody>
            </table>
        </div>
        <div id="guardar">
            <div>
                <input name="_token" value="{{csrf_token()}}" type="hidden"></input>
                <button class="button is-success">Guardar</button>
                <a href="{{ route('sale.index') }}" class="button is-warning" name="cancel">Cancelar</a>
            </div>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
        $('#add').click(function() {
            agregar();
        })
        mostrarValores();
    });

    var cont = 0;
    total = 0;
    subtotal = [];
    $('#guardar').hide();
    $('#idpro').change(mostrarValores);


    function mostrarValores() {
        datosArticulo = document.getElementById('idpro').value.split('_');
        $("#unit_price").val(datosArticulo[2]);
        $("#stock").val(datosArticulo[1]);
    }

    function agregar() {
        datosArticulo = document.getElementById('idpro').value.split('_');

        idproducto = datosArticulo[0];
        producto = $('#idpro option:selected').text();
        cantidad = $('#quantity').val();
        precio_venta = $('#unit_price').val();
        stock = $('#stock').val();

        if (idproducto != "" && cantidad != "" && cantidad > 0 && precio_venta != "") {

            if (stock >= cantidad) {
                subtotal[cont] = (cantidad * precio_venta);
                total = total + subtotal[cont];

                var fila = '<tr class="selected" id="fila' + cont + '">' +
                    '<td><button class="button" onclick="eliminar(' + cont + ');">x</button></td>' +
                    '<td><input type="hidden" name="id_producto[]" value="' + idproducto + '">' + producto + '</td>' +
                    '<td><input type="number" name="cantidad[]" value="' + cantidad + '"></td>' +
                    '<td><input type="number" name="precio_venta[]" value="' + precio_venta + '" readonly></td>' +
                    '<td>' + subtotal[cont] + '</td></tr>';

                cont++;


                $('#total').html('Q/. ' + total);
                $('#total_sales').val(total);
                limpiar();

                $('#detalles').append(fila);
                evaluar();

            } else {
                alert('Cantidad a vender supera el Stock' + stock);
            }
        } else {
            alert("Error al ingresar detalle de venta");
        }
    }

    function limpiar() {
        $('#quantity').val('');
        $('#stock').val('');
        $('#unit_price').val('');
    }

    function evaluar() {
        if (total > 0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total = total - subtotal[index];
        $('#total').html("Q/. " + total);
        $('#total_sales').val(total);
        $('#fila' + index).remove();
        evaluar();
    }
</script>

@endsection