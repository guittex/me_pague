<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view("index");
});

Route::controller(ProdutoController::class)->group(function () {
    Route::get('/produtos', 'index');
    Route::get('/produtos/view/{id}', 'view');
    Route::match(['get', 'post'], '/produtos/edit/{id}', 'edit')->name("produto.edit");
    Route::match(['get', 'post'], 'produtos/add', 'add')->name("produto.add");
    Route::post('/produtos/delete/{id}', 'delete');
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
