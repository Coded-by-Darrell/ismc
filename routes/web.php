<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAbout;
use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerService;

Route::get('/', function () {
    return view('Welcome');
});

Route:: get('/about', [ControllerAbout::class, 'index']);

Route:: get('/contact', [ControllerContact::class, 'index']);

Route:: get('/service', [ControllerService::class, 'index']);
