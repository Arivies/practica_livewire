<?php

//use App\Http\Livewire\Productos;
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
    return view('home');
})->name('home');

Route::get('/contador', function () {
    return view('counter_partial');
})->name('contador');

Route::get('/users', function () {
    return view('user_partial');
})->name('usuarios');

Route::get('/productos', function () {
    return view('productos_partial');
})->name('productos');

//Route::get('/productos',Productos::class);
