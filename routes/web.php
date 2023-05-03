<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LifecounterController;

Route::get('/', [LifecounterController::class, 'index']);
Route::post('/update', [LifecounterController::class, 'update']);
