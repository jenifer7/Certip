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
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Crear Usuario</h1>
        </div>
    </div>
</div>
<br>
    <div>
        <form action="{{ route('usuario.store') }}" class="form" method="post">
            @csrf
            <div>
                <label class="label">Nombre</label>
                <input type="text" name="name" class="input" required>
            </div>
            <div>
                <label class="label" for="email">Email</label>
                <input type="email" name="email" class="input" required>
            </div>
            <div>
                <label class="label">Contraseña</label>
                <input type="password" name="password" class="input" required>
            </div>
            <div>
                <button class="button is-success" name="save">Guardar</button>
                <a href="{{route('usuario.index')}}" class="button is-warning" name="cancel">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection