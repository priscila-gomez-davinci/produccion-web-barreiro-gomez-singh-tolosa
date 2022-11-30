@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->producto }}</div>
                <img src="{{ asset('storage/' . $producto->imagen) }}" height="400" width="400">
                <div class="card-body">
                    {{ $producto->descripcion }}
                    <hr>
                    <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver a productos </a>
                    <a class="btn btn-success" href="{{ route('productos.edit', ['producto' => $producto]) }}"> Editar producto </a>
                    <form id="form-delete" class="d-inline" method="POST" action="{{ route('productos.destroy', $producto) }}">
                        @csrf
                        @method('DELETE')
                    <button id= "form-submit" class="btn btn-danger" type="submit"> Eliminar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@vite(['resources/js/noticias/show.js'])




@endsection