@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <form action="{{ route('pro.store') }}" class="form" method="post">
    @csrf 
    <div>
        <label>Codigo</label>
        <input type="number" name="code" class="input">
    </div>
    <div>
        <label>Nombre Producto</label>
        <input type="text" name="name" class="input">
    </div>
    <div>
        <label>Precio Unidad</label>
        <input type="decimal" name="unit_price" class="input">
    </div>
    <div>
        <label>Descripción</label>
        <input type="text" name="description" class="input">
    </div>
    <div>
        <label>Stock</label>
        <input type="text" name="stock" class="input">
    </div>
    <div>
        <label>Fecha Entrada Producto</label>
        <input type="date" name="date_received" class="input">
    </div>
    <div>
      <select name="supplier_id" class="select" id="">
          @foreach($proveedores as $proveedores)
          <option value="{{ $proveedores['id'] }}">{{ $proveedores['name'] }}</option>
          @endforeach
      </select>
    </div>
    <div>
        <button class="button" name="save">Guardar</button>
        <button class="button" name="cancelar">Cancelar</button>
    </div>
    </form>
</div>

@endsection