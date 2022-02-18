@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Importar Fallecidos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card-body">
                        <form action="{{ route('fallecidos.importar.exel') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                            <div class="mb-3">
                                <input class="form-control" type="file" name="archivo" id="formFile" required>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-success">Importar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection