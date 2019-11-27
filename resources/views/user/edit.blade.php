@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
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
                    <label>Nombre</label>
                    <input type="text" name="name" class="input" value="{{ $use->name }}">
                </div>
                <div>
                    <label for="email" >Email</label>
                    <input type="email" name="email" class="input" value="{{ $use->email }}">
                </div>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="input" value="{{ $use->password }}">
                </div>
                <div>
                    <button class="button" name="save">Guardar</button>
                    <button class="button" name="cancel">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    @endsection