<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerService extends Controller
{
    public function index() {
        return view('service');
    }
}
