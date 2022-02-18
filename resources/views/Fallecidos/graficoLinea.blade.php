@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gráfico de Linea - Fallecidos por Departamento</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <canvas id="myLine" width="250" height="100"></canvas>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
 
<script>

    const ctx = document.getElementById('myLine');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'AMAZONAS',
                'ANCASH',
                'APURIMAC',
                'AREQUIPA',
                'AYACUCHO',
                'CAJAMARCA',
                'CALLAO',
                'CUSCO',
                'HUANCAVELICA',
                'HUANUCO',
                'ICA',
                'JUNIN',
                'LA LIBERTAD',
                'LAMBAYEQUE',
                'LIMA',
                'LORETO',
                'MADRE DE DIOS',
                'MOQUEGUA',
                'PASCO',
                'PIURA',
                'PUNO',
                'SAN MARTIN',
                'TACNA',
                'TUMBES',
                'UCAYALI'
            ],
            datasets: [{
                label: '# Fallecidos',
                data: [],
                data: [{{$a[1]}},
                        {{$a[2]}},
                        {{$a[3]}},
                        {{$a[4]}},
                        {{$a[5]}},
                        {{$a[6]}},
                        {{$a[7]}},
                        {{$a[8]}},
                        {{$a[9]}},
                        {{$a[10]}},
                        {{$a[11]}},
                        {{$a[12]}},
                        {{$a[13]}},
                        {{$a[14]}},
                        {{$a[15]}},
                        {{$a[16]}},
                        {{$a[17]}},
                        {{$a[18]}},
                        {{$a[19]}},
                        {{$a[20]}},
                        {{$a[21]}},
                        {{$a[22]}},
                        {{$a[23]}},
                        {{$a[24]}},
                        {{$a[25]}}],
                fill: false,
                pointBackgroundColor: 'rgb(255, 0, 0)',
                borderColor: 'rgb(75, 192, 192)',
                tension: 0
            }]
        }
    });

</script>

@endsection