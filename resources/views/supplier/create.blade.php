@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <form action="/supplier" class="form" method="post">
            @csrf 
            <div>
                <label>Nombre</label>
                <input type="text" name="name" class="input">
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
                <label>
                    <input type="checkbox">Activo
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