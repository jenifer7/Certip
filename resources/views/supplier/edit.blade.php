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
            <div class="hero is-link">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title is-1">Proveedor</h1>
                    </div>
                </div>
            </div>
            <div>
                @endif
                <form action="{{ route('update', $suppl->id) }}" class="form" method="post">
                    @csrf
                    @method('PATCH')
                    <div>
                        <label class="label">Nombre</label>
                        <input type="text" name="name" class="input" value="{{ $suppl->name }}">
                    </div>
                    <div>
                        <label class="label">Telefono</label>
                        <input type="text" name="phone" class="input" value="{{ $suppl->phone }}">
                    </div>
                    <div>
                        <label class="label">Dirección</label>
                        <input type="text" name="address" class="input" value="{{ $suppl->address }}">
                    </div>
                    <div>
                        <label class="label">
                            <input type="checkbox" name="is_active" value="{{ $suppl->is_active }}">Estado
                        </label>
                    </div>
                    <div>
                        <button class="button is-success" name="save">Guardar</button>
                        <a href="{{route('show', $suppl->id)}}" class="button is-warning" name="cancel">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection