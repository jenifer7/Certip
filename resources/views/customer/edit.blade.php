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
            <form action="{{ route('cliente.update', $custom->id) }}" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label>Nombre Completo</label>
                    <input type="text" name="fullname" class="input" value="{{ $custom->fullname }}">
                </div>
                <div>
                    <label>Telefono</label>
                    <input type="text" name="phone" class="input" value="{{ $custom->phone }}">
                </div>
                <div>
                    <label>Dirección</label>
                    <input type="text" name="address" class="input" value="{{ $custom->address }}">
                </div>
                <div>
                    <label>NIT</label>
                    <input type="text" name="address" class="input" value="{{ $custom->nit }}">
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="is_active" value="{{ $custom->is_active }}">Estado
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