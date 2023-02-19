<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');

//create and post
Route::get('/product/create', [MainController::class, 'productCreate'])->name('product.create');
Route::post('/product/create', [MainController::class, 'productStore'])->name('product.store');