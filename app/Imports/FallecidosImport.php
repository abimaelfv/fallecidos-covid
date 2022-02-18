<?php

namespace App\Imports;

use App\Models\Fallecido;
use Maatwebsite\Excel\Concerns\{ToModel,WithHeadingRow};

class FallecidosImport implements ToModel,WithHeadingRow
{

    public function model(array $row)
    {
        return new Fallecido([
            'uuid' => $row['uuid'],
            'f_corte' => $row['f_corte'],
            'f_fallecimiento' => $row['f_fallecimiento'],
            'edad' => $row['edad'],
            'sexo' => $row['sexo'],
            'clasificacion_defuncion' => $row['clasificacion_defuncion'],
            'departamento' => $row['departamento'],
            'provincia' => $row['provincia'],
            'distrito' => $row['distrito'],
            'ubigeo' => $row['ubigeo']
        ]);
    }

    public function rules() : array{
        return [
            'uuid' => 'nullable',
            'f_corte' => 'nullable',
            'f_fallecimiento' => 'nullable',
            'edad' => 'nullable',
            'sexo' => 'nullable',
            'clasificacion_defuncion' => 'nullable',
            'departamento' => 'nullable',
            'provincia' => 'nullable',
            'distrito' => 'nullable',
            'ubigeo' => 'nullable'
        ];
    }
}
