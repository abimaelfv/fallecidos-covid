<?php

namespace App\Http\Controllers\Fallecidos;

use Excel;
use App\Http\Controllers\Controller;
use App\Imports\FallecidosImport;
use Illuminate\Http\Request;

class ImportarFallecidoController extends Controller
{
    public function importar(){

        return view('fallecidos.importar');
    }

    public function importarExel(Request $request){
        
        if($request->hasFile('archivo')){
            Excel::import(new FallecidosImport, $request->file('archivo'));
            return redirect()->route('fallecidos.index');
        }
    }
}
