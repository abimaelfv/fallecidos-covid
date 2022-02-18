@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gráfico de Dona - Fallecidos por Sexo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-md-5">
                         <canvas id="myDona" width="50" height="50"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

    const ctx = document.getElementById('myDona');
    const myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [
                'Femenino',
                'Masculino'
            ],
            datasets: [{
                label: 'Clasificasión de fallecidos por sexo',
                data: [{{$F}}, {{$M}}],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
                ],
                hoverOffset: 4
            }]
        }
    });

</script>

@endsection