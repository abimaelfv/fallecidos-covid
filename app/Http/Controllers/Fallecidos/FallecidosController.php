<?php

namespace App\Http\Controllers\Fallecidos;

use App\Models\Fallecido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FallecidosController extends Controller
{

    public function index(Request $request)
    {
        // sin paginacion
        /* $fallecidos = Fallecido::filtrar($request->buscar)->all();
        return view('fallecidos.index', compact('fallecidos')); */

        // con paginacion
        $fallecidos = Fallecido::filtrar($request->buscar)->paginate(100);
        return view('fallecidos.index', compact('fallecidos'));
    }

    public function Fallecidos(){
        $fallecidos = Fallecido::paginate(20);
        return $fallecidos;
    }
    
    public function create()
    {
        return view('fallecidos.create');
    }

    
    public function store(Request $request)
    {
        Fallecido::create($request->all());
        return redirect()->route('fallecidos.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {  
        $fallecido = Fallecido::find($id);
        return view('fallecidos.edit', compact('fallecido'));
    }

    public function update(Request $request, Fallecido $fallecido)
    {
        $fallecido->update($request->all());
        return redirect()->route('fallecidos.index');
    }

    public function destroy($id)
    {
        $fallecido = Fallecido::findOrFail($id);
        $fallecido->delete();
        return redirect()->route('fallecidos.index');
    }
}
