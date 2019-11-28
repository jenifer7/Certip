@extends('layouts.layout')

@section('title','Bienvenido!!')
@section('content')

<div>
    <div class="hero is-link">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1">Crear Nuevo Empleado</h1>
            </div>
        </div>
    </div>
    <div>
        <form class="form" action="{{ route('emplea.store') }}" method="post">
            @csrf
            <div>
                <label class="label">Nombre Completo</label>
                <input type="text" name="fullname" class="input">
            </div>
            <div>
                <label class="label">Posición</label>
                <input type="text" name="position" class="input">
            </div>
            <div>
                <label class="label">Teléfono</label>
                <input type="text" name="phone" class="input">
            </div>
            <div>
                <label class="label">Dirección</label>
                <input type="text" name="address" class="input">
            </div>
            <div>
                <label class="label">Genero</label>
                <input type="text" name="gender" class="input">
            </div>
            <div>
                <label class="label">
                    <input name="is_active" type="checkbox">Estado
                </label>
            </div>
            <br>
            <br>
            <div>
                <button class="button is-success" name="save">Guardar</button>
                <a href="{{route('emplea.index')}}" class="button is-warning" name="cancel">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection