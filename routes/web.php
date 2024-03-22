<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view("index");
});

Route::controller(PessoasController::class)->group(function () {
    Route::get('/pessoas', 'index');
    Route::get('/pessoas/view/{id}', 'view');
    Route::match(['get', 'post'], '/pessoas/edit/{id}', 'edit')->name("pessoas.edit");
    Route::match(['get', 'post'], '/pessoas/add', 'add')->name("pessoas.add");
    Route::post('/pessoas/delete/{id}', 'delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
