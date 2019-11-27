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
<div>
    <form action="" class="form" method="post">
        @csrf
        <div>
            <input disabled class="input" value="{{$fecha}}" name="date_sale" type="text" id="date_sale" placeholder="Fecha">
        </div>
        <div class="control">
            <label for="user_id">Vendedor</label>
            <select name="user_id" class="input" id="user_id">
                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
            </select>
        </div>
        <div class="control">
            <label for="">Cliente</label>
            <select class="input" name="customer_id" class="select" id="idcliente">
                @foreach($cliente as $cliente )
                <option value="{{ $cliente->id }}">{{ $cliente->fullname }}</option>
                @endforeach
            </select>
        </div>
        <div class="control">
            <label for="">Producto</label>
            <select class="input" name="idpro" id="idpro">
                @foreach($productos as $producto)
                <option value="{{$producto->id}}_{{$producto->stock}}_{{$producto->unit_price}}">
                    {{ $producto->producto }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="stock">Stock</label>
            <input class="input" name="stock" type="number" id="stock">
        </div>
        <div>
            <label for="quantity">Cantidad</label>
            <input class="input" name="quantity" id="quantity" type="number">
        </div>
        <div>
            <label for="unit_price">Precio Venta</label>
            <input class="input" name="unit_price" type="number" id="unit_price">
        </div>
        <br>
        <div class="field">
            <div class="control">
                <!-- <button id="add">Agregar</button> -->
                <a id="add"><input class="button" type="button" value="Agregar"></a>
            </div>
        </div>
        <hr>
        <div>
            <table id="detalles" class="table">
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
                <button class="button">Guardar</button>
                <button class="button" name="cancel">Cancelar</button>
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
                    '<td><button onclick="eliminar(' + cont + ');">X</button></td>' +
                    '<td><input type="hidden" name="id_producto[]" value="' + idproducto + '">' + producto + '</td>' +
                    '<td><input  name="cantidad[]" value="' + cantidad + '"></td>' +
                    '<td><input  name="precio_venta[]" value="' + precio_venta + '" readonly></td>' +
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