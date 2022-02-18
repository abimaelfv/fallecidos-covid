<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fallecidos\FallecidosController;
use App\Http\Controllers\Fallecidos\ImportarFallecidoController;
use App\Http\Controllers\Fallecidos\GraficosFallecidoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fallecidos/index', [FallecidosController::class, 'index'])->name('fallecidos.index');
Route::get('/fallecidos/create', [FallecidosController::class, 'create'])->name('fallecidos.create');
Route::post('/fallecidos/store', [FallecidosController::class, 'store'])->name('fallecidos.store');
Route::get('/fallecidos/edit/{id}', [FallecidosController::class, 'edit'])->name('fallecidos.edit');
Route::put('/fallecidos/update/{fallecido}', [FallecidosController::class, 'update'])->name('fallecidos.update');
Route::delete('/fallecidos/destroy/{id}', [FallecidosController::class, 'destroy'])->name('fallecidos.destroy');

Route::get('/fallecidos/Fallecidos', [FallecidosController::class, 'fallecidos'])->name('fallecidos.Fallecidos');


Route::get('/fallecidos/importar', [ImportarFallecidoController::class, 'importar'])->name('fallecidos.importar');
Route::post('/fallecidos/importar/exel', [ImportarFallecidoController::class, 'importarExel'])->name('fallecidos.importar.exel');

//barras
Route::get('/fallecidos/grafico/barras', [GraficosFallecidoController::class, 'graficoBarras'])->name('fallecidos.graficoBarras');
//dona
Route::get('/fallecidos/grafico/dona', [GraficosFallecidoController::class, 'graficoDona'])->name('fallecidos.graficoDona');
//Line
Route::get('/fallecidos/grafico/linea', [GraficosFallecidoController::class, 'graficoLinea'])->name('fallecidos.graficoLinea');
//polar
Route::get('/fallecidos/grafico/polar', [GraficosFallecidoController::class, 'graficoPolar'])->name('fallecidos.graficoPolar');

