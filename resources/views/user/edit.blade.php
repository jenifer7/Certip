@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Editar Usuario</h1>
        </div>
    </div>
</div>
    <div>
        <div class="card-header">
            Edit
        </div>
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
            <form action="{{ route('usuario.update', $use->id) }}" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label class="label">Nombre</label>
                    <input type="text" name="name" class="input" value="{{ $use->name }}">
                </div>
                <div>
                    <label class="label" for="email" >Email</label>
                    <input type="email" name="email" class="input" value="{{ $use->email }}">
                </div>
                <div>
                    <label class="label" for="password">Contraseña</label>
                    <input type="password" name="password" class="input" value="{{ $use->password }}">
                </div>
                <div>
                    <button class="button is-success" name="save">Guardar</button>
                    <a href="{{route('usuario.show', $use->id)}}" class="button is-warning" name="cancel">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    @endsection