@extends('layouts.layout')

@section('title','Bienvenido!!')
@section('content')

<div>
    <div>
        <form class="form" action="" method="post">
            @csrf
            <div>
                <label>Nombre Completo</label>
                <input type="text" name="fullname" class="input">
            </div>
            <div>
                <label>Posición</label>
                <input type="text" name="position" class="input">
            </div>
            <div>
                <label>Telefono</label>
                <input type="text" name="phone" class="input">
            </div>
            <div>
                <label>Dirección</label>
                <input type="text" name="address" class="input">
            </div>
            <div>
                <label>Genero</label>
                <input type="text" name="gender" class="input">
            </div>
            <div>
                <label>
                <input type="checkbox">Activo
                </label>
            </div>
            <br>
            <br>
            <div>
            <button class="button" name="save">Guardar</button>
            <button class="button" name="cancel">Cancelar</button>
            </div>
        </form>
    </div>
</div>

@endsection