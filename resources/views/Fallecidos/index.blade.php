@extends('layouts.app')

@section('content')
<div class="container-fluid" id="app">
    <div class="row justify-content-center">
        <style>
            @media (max-width: 800px) {
                .pagination {
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-top: 15px;
                }
            }
        </style>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fallecidos covid - 19</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5">
                                    <a class="btn btn-success" href="{{route('fallecidos.create')}}"><i class="fa-solid fa-plus"></i> Create</a>
                                    <a class="btn btn-primary" href="{{ route('fallecidos.importar') }}"><i class="fa-solid fa-file"></i> Importar datos</a>
                                </div>
                                <div class="col-md-7">
                                    <div class="d-flex float-lg-start">
                                        {!! $fallecidos->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <form class="d-flex">
                                        <input class="form-control me-2" name="buscar" type="Search" autocomplete="off">
                                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">uuid</th>
                                            <th scope="col">f_corte_Inform</th>
                                            <th scope="col">f_fallecimiento</th>
                                            <th scope="col">edad</th>
                                            <th scope="col">sexo</th>
                                            <th scope="col">clasificacion_defuncion</th>
                                            <th scope="col">departamento</th>
                                            <th scope="col">provincia</th>
                                            <th scope="col">distrito</th>
                                            <th scope="col">ubigeo</th>
                                            <th class="text-center" scope="col">funciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fallecidos as $key => $fallecido)
                                            <tr>
                                                <td>{{ $fallecido->id}}</td>
                                                <td>{{ $fallecido->uuid }}</td>
                                                <td>{{ $fallecido->f_corte }}</td>
                                                <td>{{ $fallecido->f_fallecimiento }}</td>
                                                <td>{{ $fallecido->edad }}</td>
                                                <td>{{ $fallecido->sexo }}</td>
                                                <td>{{ $fallecido->clasificacion_defuncion }}</td>
                                                <td>{{ $fallecido->departamento }}</td>
                                                <td>{{ $fallecido->provincia }}</td>
                                                <td>{{ $fallecido->distrito }}</td>
                                                <td>{{ $fallecido->ubigeo }}</td>
                                                <td class="text-center" style="width: 200px">
                                                    <a href="" class="btn btn-secondary btn-sm" title="ver"><i class="fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('fallecidos.edit',$fallecido->id)}}" class="btn btn-warning btn-sm" title="editar"><i class="fa-solid fa-pen"></i></a>
                                                    <button type="button" title="eliminar" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$fallecido->id}}"><i class="fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            @include('fallecidos.delete')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-end">
                                {!! $fallecidos->links() !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
