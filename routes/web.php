<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/', 'App\Http\Controllers\primeroControlador@show');

Route::get('/info', function () {
    return view('info.info');
});

Route::get('/contacto', function () {
    return view('contacto.contacto');
});

Route::post('/seleccion2', function () {
    return view('seleccion2.seleccion2');
});

Route::get('/seleccion/{id}', 'App\Http\Controllers\SeleccionControlador@festival');

Route::get('hotelito', 'App\Http\Controllers\hotelesControlador@hotel')->name('mostrarHoteles');

Route::get('transporte', 'App\Http\Controllers\transportesControlador@transportes')->name('mostrarTransportes');
