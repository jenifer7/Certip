@extends('layouts.layout')
@section('title','Bienvenido!')

@section('content')
<style>
    .hero {
        border-radius: 3px;
    }
</style>

<div class="hero is-link">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-1">Usuario</h1>
        </div>
    </div>
</div>
<br>
<div>
    <div>
        <div>
            <div>
                <table class="table is-fullwidth">
                    <thead style="background-color: #A9D0F5"> 
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $use->name }}</td>
                            <td>{{ $use->email }}</td>
                            <td><a href="{{ route('usuario.edit', $use->id) }}"><input type="submit" class="button is-info" value="Editar"></a></td>
                            <td>
                                <form action="{{ route('usuario.destroy', $use->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="button is-danger" value="Borrar">
                                </form>
                            </td>
                            <td><a href="{{ route('usuario.index') }}"><input type="submit" class="button is-dark" value="Listado"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection