<?php

use App\Http\Controllers\ServiceApiController;
use Illuminate\Support\Facades\Route;

Route::get('/servicios', [ServiceApiController::class, 'index']);
Route::get('/sharedservices', [ServiceApiController::class, 'shared_services']);
Route::get('/mainServicios', [ServiceApiController::class, 'main_services']);

