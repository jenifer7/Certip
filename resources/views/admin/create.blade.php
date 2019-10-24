@extends('layouts.layout')

@section('content')

<div>
    <div>
        <form class="form" action="" method="post">
            @csrf
            <label>Nombre Completo</label>
            <input type="text" name="fullname" class="input">
            <label>Posición</label>
            <input type="text" name="position" class="input">
            <label>Telefono</label>
            <input type="text" name="phone" class="input">
            <label>Dirección</label>
            <input type="text" name="address" class="input">
            <label>Genero</label>
            <input type="text" name="gender" class="input"> 
            <br>
            <br>
            <button class="button" name="save">Guardar</button>
            <button class="button" name="cancel">Cancelar</button>
        </form>
    </div>
</div>

@endsection