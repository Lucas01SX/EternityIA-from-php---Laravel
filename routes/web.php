<?php

use App\Http\Controllers\ApresentacaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('index');
});
Route::get('/', function(){
    return view('pages.apresentacao');
});
Route::get('/servicos', function(){
    return view('pages.servicos');
});
Route::get('/sobre-nos', function(){
    return view('pages.sobre-nos');
});
Route::get('/contate-nos', function(){
    return view('pages.contate-nos');
});
