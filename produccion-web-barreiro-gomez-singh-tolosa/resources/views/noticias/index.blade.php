@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Noticias') }}</div>

                    <div class="card-body">

                        @if (Session('status'))
                            <div class="alert alert-success">
                                {{ Session('status') }}
                            </div>
                        @endif

                        <div class="mb-3">
                        <a class="btn btn-primary" action="{{ route('noticias.create') }}"> Agregar Noticia </a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"> Nombre </th>
                                    <th scope="col"> Descripcion </th>
                                    <th scope="col">  </th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($noticias->count() > 0)
                                    @foreach ($noticias as $noticia)
                                        <tr>
                                            <td> {{ $noticia->titulo }} </td>
                                            <td> {{ $noticia->descripcion }} </td>
                                            <td> </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('noticias.index', ['noticia' => $noticia]) }}"> Ingresar </a>
                                            </td>
                                        </tr>
                                    @endforeach                           
                                @else
                                    <tr>
                                        <td class="text-center" colspan="4"> No existen productos cargados. </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection