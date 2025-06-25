<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerAbout;
use App\Http\Controllers\ControllerContact;
use App\Http\Controllers\ControllerService;

Route::get('/', [HomeController::class, 'index']);

Route:: get('pages.about', [ControllerAbout::class, 'index']);

Route:: get('pages.contact', [ControllerContact::class, 'index']);

Route:: get('pages.service', [ControllerService::class, 'index']);
