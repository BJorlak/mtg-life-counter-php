<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LifeCounterController;

Route::get('/life-counter', [LifeCounterController::class, 'index']);

Route::post('/life-counter', [LifeCounterController::class, 'update']);
