<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('proyectos', ProyectoController::class);
// ruta para todos los metodos 