@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div>
    <div>
        <div class="hero is-link">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">Empleado</h1>
                </div>
            </div>
        </div>
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
            <form action="{{ route('emplea.update', $emple->id) }}" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label class="label">Nombre Completo</label>
                    <input type="text" name="fullname" class="input" value="{{ $emple->fullname }}">
                </div>
                <div>
                    <label class="label">Posición</label>
                    <input type="text" name="position" class="input" value="{{ $emple->position }}">
                </div>
                <div>
                    <label class="label">Telefono</label>
                    <input type="text" name="phone" class="input" value="{{ $emple->phone }}">
                </div>
                <div>
                    <label class="label">Dirección</label>
                    <input type="text" name="address" class="input" value="{{ $emple->address }}">
                </div>
                <div>
                    <label class="label">Género</label>
                    <input type="text" name="gender" class="input" value="{{ $emple->gender }}">
                </div>
                <div>
                    <label class="label">
                        <input type="checkbox" name="is_active" value="{{ $emple->is_active }}">Estado
                    </label>
                </div>
                <div>
                    <button class="button is-success" name="save">Guardar</button>
                   <a href="{{ route('emplea.show', $emple->id) }}"><button class="button is-warning" name="cancel">Cancelar</button></a>
                </div>
            </form>
        </div>
    </div>

    @endsection