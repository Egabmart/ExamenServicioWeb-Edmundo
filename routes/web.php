<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/api/productos', [ProductoController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
