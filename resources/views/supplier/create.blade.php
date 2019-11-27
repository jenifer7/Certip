@extends('layouts.layout')

@section('title', 'Proveedores!!')
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
    <div>
        <form action="{{ route('store') }}" class="form" method="post">
            @csrf
            <div>
                <label>Nombre</label>
                <input type="text" name="name" class="input" required value="{{old('name')}}">
            </div>
            <div>
                <label>Telefono</label>
                <input type="text" name="phone" class="input" required>
            </div>
            <div>
                <label>Dirección</label>
                <input type="text" name="address" class="input" required>
            </div>
            <div>
                <label>
                    <input name="is_active" type="checkbox">Activo
                </label>
            </div>
            <div>
                <button class="button" name="save">Guardar</button>
                <button class="button" name="cancel">Cancelar</button>
            </div>
        </form>
    </div>
</div>

@endsection