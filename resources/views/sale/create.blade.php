@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <form action="{{ route('sale.store') }}" class="form" method="post">
        @csrf
        <div class="control">
            <label for="">Cliente</label>
            <select class="is-focused" name="customer_id" class="select" id="idcliente">
                @foreach($cliente as $cliente )
                <option value="{{ $cliente->id }}">{{ $cliente->fullname }}</option>
                @endforeach
            </select>
        </div>
        <div class="control">
            <label for="">Producto</label>
            <select class="select is-focused" name="idpro" id="idpro">
                @foreach($productos as $producto)
                <option value="{{$producto->id}}_{{$producto->stock}}_{{$producto->sale_price}}">
                    {{ $producto->producto }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantity">Cantidad</label>
            <input class="input" name="quantity" id="quantity" type="number">
        </div>
        <div>
            <label for="stock">Stock</label>
            <input class="input" name="stock" type="number" id="stock" disabled>
        </div>
        <div>
            <label for="sale_price">Precio Venta</label>
            <input class="input" name="sale_price" type="number" id="sale_price">
        </div>
        <div>
            <button id="add">Agregar</button>
        </div>
        <div>
            <table id="detalles" class="table">
                <thead>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Precio Venta</th>
                    <th>SubTotal</th>
                </thead>
                <tfoot>
                    <th>TOTAL</th>
                    <th></th>
                    <th></th>
                    <th>
                        <h4 id="total">Q/. 0.00</h4><input type="hidden" name="total_venta" id="total_venta">
                    </th>
                </tfoot>
            </table>
        </div>
        <div id="guardar">
            <div>
                <button type="submit" name="save">Guardar</button>
                <button type="reset" name="cancelar">Cancelar</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#add').click(function() {
            agregar();
        });
    });

    var cont = 0;
    total = 0;
    subtotal = [];
    $("#guardar").hide();
    $("#idpro").change(mostrarValores);

    function mostrarValores() {
        datosArticulo = document.getElementById('idpro').value.split('_');
        $("#sale_price").val(datosArticulo[2]);
        $("#stock").val(datosArticulo[1]);
    }

    function agregar() {
        datosArticulo = document.getElementById('idpro').value.split('_');

        idproducto = datosArticulo[0];
        producto = $("#idpro option:selected").text();
        cantidad = $("#quantity").val();

        precio_venta = $("#sale_price").val();
        stock = $("#stock").val();

        if (idproducto!="" && cantidad!="" && cantidad>0 && precio_venta!="") {
            if (stock >= cantidad) {
                subtotal[cont] = (cantidad*precio_venta);
                total=total+subtotal[cont];

                var fila='<tr class="selected" id="fila'+cont+'">'
                '<td><button onclick="eliminar('+cont+');">X</button></td>'
                '<td><input type="hidden" name="idproducto[]" value="'+idpro+'">'+producto+'</td>'
                '<td><input type="number" name"cantidad[]" value="'+cantidad+'"></td>'
                '<td><input type"number" name="precio_venta[]" value="'+precio_venta+'"></td>'
                '<td>'+subtotal[cont]+'</td></tr>';
                cont++;
                limpiar();
                $("#total").html("Q/. " + total);
                $("#total_venta").val(total);
                evaluar();
                $("#detalles").append(fila);
            } else {
                alert('Cantidad a vender supera el Stock');
            }
        } else {
            alert("Error al ingresar detalle de venta");
        }
    }

    function limpiar() {
        $("#quantity").val("");
        $("#sale_price").val("");
    }

    function evaluar() {
        if (total>0) {
            $("#guardar").show();
        } else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        total=total-subtotal[index];
        $("#total").html("Q/. " + total);
        $("#total_venta").val(total);
        $("#tdo" + index).remove();
        evaluar();
    }
</script>

@endsection