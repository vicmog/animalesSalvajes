<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartaController;
use App\Http\Controllers\PreguntaController;


Route::resource('cartas',CartaController::class,['except'=>['create','edit']]);
Route::resource('preguntas',PreguntaController::class,['except'=>['create','edit']]);