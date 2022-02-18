<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,Builder};

class Fallecido extends Model
{
    use HasFactory;

    protected $table = 'fallecidos';

    protected $guarded = [];

    public function scopeFiltrar(Builder $builder, $fallecido){

        if(trim($fallecido)){
            $builder->where('departamento', 'LIKE', "%$fallecido%")
            ->orWhere('uuid', 'LIKE', "%$fallecido%")
            ->orWhere('f_fallecimiento', 'LIKE', "%$fallecido%")
            ->orWhere('clasificacion_defuncion', 'LIKE', "%$fallecido%")
            ->orWhere('provincia', 'LIKE', "%$fallecido%")
            ->orWhere('distrito', 'LIKE', "%$fallecido%")
            ->orWhere('sexo', 'LIKE', "%$fallecido%")
            ->orWhere('edad', 'LIKE', "%$fallecido%");
        }
    }
}
