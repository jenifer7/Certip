@extends('layouts.layout')

@section('title', 'Bienvenido!!')
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
    
<div>
    <div>
        <form action="{{ route('cliente.store') }}" class="form" method="post">
            @csrf
            <div>
                <label>Nombre Completo</label>
                <input type="text" name="fullname" class="input" required>
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
                <label>NIT</label>
                <input type="text" name="nit" class="input" required>
            </div>
            <div>
                <label>
                    <input name="is_active" type="checkbox">Estado
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