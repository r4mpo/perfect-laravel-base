<?php

use App\Http\Controllers\Sistema\ProdutosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::controller(AuthController::class)->prefix('usuario')->group(function () {
    Route::post('login', 'login');
    Route::post('registrar', 'registrar');
    Route::get('detalhar', 'detalhar')->middleware('token');
    Route::get('logout', 'logout')->middleware('token');
});

Route::prefix('sistema')->group(function() {
    Route::resource('produtos', ProdutosController::class);
});