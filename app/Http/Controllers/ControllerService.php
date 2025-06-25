<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerService extends Controller
{
    public function index() {
        //return view('service');

        $webdevServices = [
            ['serviceName' => 'Custom Web Development', 'servicePrice' => 'PHP 50000 - PHP 200000'],
            ['serviceName' => 'E-Commerce Platforms', 'servicePrice' => 'PHP 80000 - PHP 300000']
        ];

        $consultingServices = [
            ['serviceName' => 'IT Strategy Consulting', 'servicePrice' => 'PHP 5000/hour'],
            ['serviceName' => 'Training & Workshops', 'servicePrice' => 'PHP 20000/day']
        ];

        return view('service', compact('webdevServices', 'consultingServices'));
    }
}
