<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickuzController;


Route::get('/click_pay', [ClickuzController::class, 'pay']);

Route::post('/clprepare', [ClickuzController::class, 'prepare']);

Route::post('/clcomplete', [ClickuzController::class, 'complete']);
