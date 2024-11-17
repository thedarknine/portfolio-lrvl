<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'home']);
Route::get('/experience', [IndexController::class, 'experience']);
Route::get('/competences', [IndexController::class, 'competences']);
Route::get('/formation', [IndexController::class, 'formation']);
Route::get('/projets', [IndexController::class, 'projets']);
Route::get('/arcade', [IndexController::class, 'arcade']);
