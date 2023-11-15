<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', [DemoController::class, 'demoAction']);