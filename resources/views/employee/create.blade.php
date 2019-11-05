@extends('layouts.layout')

@section('title','Bienvenido!!')
@section('content')

<div>
    <div>
        <form class="form" action="{{ route('emplea.store') }}" method="post">
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
                <label>Teléfono</label>
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
                    <input name="is_active" type="checkbox">Estado
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