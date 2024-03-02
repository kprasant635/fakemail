<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontened\IndexController;

Route::get('/', [App\Http\Controllers\frontened\IndexController::class, 'index'])->name('index');
