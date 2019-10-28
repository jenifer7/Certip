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
            <form action="{{ route('update', $suppl->id) }}" class="form" method="post">
                @csrf
                @method('PATCH')
                <div>
                    <label>Nombre</label>
                    <input type="text" name="name" class="input" value="{{ $suppl->name }}">
                </div>
                <div>
                    <label>Telefono</label>
                    <input type="text" name="phone" class="input" value="{{ $suppl->phone }}">
                </div>
                <div>
                    <label>Dirección</label>
                    <input type="text" name="address" class="input" value="{{ $suppl->address }}">
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="is_active" value="{{ $suppl->is_active }}">Estado
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