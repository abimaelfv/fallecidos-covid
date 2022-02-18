
@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gráfico de Área Polar - Fallecidos por Año</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-md-5">
                        <canvas id="myPolar" width="250" height="100"></canvas>
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

    const ctx = document.getElementById('myPolar');
    const myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: [
                '2020',
                '2021',
                '2022'
            ],
            datasets: [{
                label: 'Clasificasión de fallecidos por año',
                data: [{{$y[1]}},
                        {{$y[2]}},
                        {{$y[3]}}
                ],
                backgroundColor: [
                    'rgb(255, 205, 86)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 99, 132)',
                    'rgb(201, 203, 207)',
                    'rgb(75, 192, 192)',
                ],
            }]
        }
    });

</script>

@endsection