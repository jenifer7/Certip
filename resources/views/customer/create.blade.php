@extends('layouts.layout')

@section('title', 'Bienvenido!!')
@section('content')

<div class="card uper">
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

        <div>
            <div class="hero is-link">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title is-1">Crear Nuevo Cliente</h1>
                    </div>
                </div>
            </div>
            <div>
                <form action="{{ route('cliente.store') }}" class="form" method="post">
                    @csrf
                    <div>
                        <label class="label">Nombre Completo</label>
                        <input type="text" name="fullname" class="input" required>
                    </div>
                    <div>
                        <label class="label">Telefono</label>
                        <input type="text" name="phone" class="input" required>
                    </div>
                    <div>
                        <label class="label">Dirección</label>
                        <input type="text" name="address" class="input" required>
                    </div>
                    <div>
                        <label class="label">NIT</label>
                        <input type="text" name="nit" class="input" required>
                    </div>
                    <div>
                        <label class="label">
                            <input name="is_active" type="checkbox">Estado
                        </label>
                    </div>
                    <div>
                        <button class="button is-success" name="save">Guardar</button>
                        <a href="{{route('cliente.index')}}" class="button is-warning" name="cancel">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>

        @endsection