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
        <form action="{{ route('usuario.store') }}" class="form" method="post">
            @csrf
            <div>
                <label>Nombre</label>
                <input type="text" name="name" class="input" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" class="input" required>
            </div>
            <div>
                <label>Contraseña</label>
                <input type="password" name="password" class="input" required>
            </div>
            <div>
                <button class="button" name="save">Guardar</button>
                <button class="button" name="cancel">Cancelar</button>
            </div>
        </form>
    </div>
</div>

@endsection