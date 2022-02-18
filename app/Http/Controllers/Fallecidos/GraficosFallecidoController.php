<?php

namespace App\Http\Controllers\Fallecidos;

use App\Models\Fallecido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraficosFallecidoController extends Controller
{
    public function graficoBarras(){

        $a = Fallecido::where('clasificacion_defuncion','Criterio clínico')->count();
        $b = Fallecido::where('clasificacion_defuncion','Criterio investigación Epidemiológica')->count();
        $c = Fallecido::where('clasificacion_defuncion','Criterio nexo epidemiológico')->count();
        $d = Fallecido::where('clasificacion_defuncion','Criterio radiológico')->count();
        $e = Fallecido::where('clasificacion_defuncion','Criterio serológico')->count();
        $f = Fallecido::where('clasificacion_defuncion','Criterio SINADEF')->count();
        $g = Fallecido::where('clasificacion_defuncion','Criterio virológico')->count();
        
        return view('fallecidos.graficoBarras', compact('a','b','c','d','e','f','g'));
    }


    public function graficoDona(){

        $M = Fallecido::where('sexo','M')->count();
        $F = Fallecido::where('sexo','F')->count();

        return view('fallecidos.graficoDona', compact('M','F'));
    }

    public function graficoLinea(){

        $a = array();

        $a[1] = Fallecido::where('departamento','AMAZONAS')->count();
        $a[2] = Fallecido::where('departamento','ANCASH')->count();
        $a[3] = Fallecido::where('departamento','APURIMAC')->count();
        $a[4] = Fallecido::where('departamento','AREQUIPA')->count();
        $a[5] = Fallecido::where('departamento','AYACUCHO')->count();
        $a[6] = Fallecido::where('departamento','CAJAMARCA')->count();
        $a[7] = Fallecido::where('departamento','CALLAO')->count();
        $a[8] = Fallecido::where('departamento','CUSCO')->count();
        $a[9] = Fallecido::where('departamento','HUANCAVELICA')->count();
        $a[10] = Fallecido::where('departamento','HUANUCO')->count();
        $a[11] = Fallecido::where('departamento','ICA')->count();
        $a[12] = Fallecido::where('departamento','JUNIN')->count();
        $a[13] = Fallecido::where('departamento','LA LIBERTAD')->count();
        $a[14] = Fallecido::where('departamento','LAMBAYEQUE')->count();
        $a[15] = Fallecido::where('departamento','LIMA')->count();
        $a[16] = Fallecido::where('departamento','LORETO')->count();
        $a[17] = Fallecido::where('departamento','MADRE DE DIOS')->count();
        $a[18] = Fallecido::where('departamento','MOQUEGUA')->count();
        $a[19] = Fallecido::where('departamento','PASCO')->count();
        $a[20] = Fallecido::where('departamento','PIURA')->count();
        $a[21] = Fallecido::where('departamento','PUNO')->count();
        $a[22] = Fallecido::where('departamento','SAN MARTIN')->count();
        $a[23] = Fallecido::where('departamento','TACNA')->count();
        $a[24] = Fallecido::where('departamento','TUMBES')->count();
        $a[25] = Fallecido::where('departamento','UCAYALI')->count();

        return view('fallecidos.graficoLinea', compact('a'));
    }

    public function graficoPolar(){

        $y = array();

        $y[1] = Fallecido::whereYear('f_fallecimiento',2020)->count();
        $y[2] = Fallecido::whereYear('f_fallecimiento',2021)->count();
        $y[3] = Fallecido::whereYear('f_fallecimiento',2022)->count();

        return view('fallecidos.graficoPolar', compact('y'));
    }
}
