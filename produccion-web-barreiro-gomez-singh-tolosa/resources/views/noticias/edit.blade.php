@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $noticia->titulo }}</div>

                    <div class="card-body">

                        <form class="m-3" method="POST" action="{{ route('noticias.update', $noticia) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="titulo" class="form-label"> Nombre </label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el nombre del producto" value="{{ $noticia->titulo }}">
                            </div>
                            <div class="mb-4">
                                <label for="descripcion" class="form-label"> Descripción </label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción del producto">{{ $noticia->descripcion }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="imagen" class="form-label"> Imagen </label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                                @error('imagen')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success"> Modificar </button>
                            <a class="btn btn-danger" href="{{ route('noticias.index') }}"> Cancelar </a>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
