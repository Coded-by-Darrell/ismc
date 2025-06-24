<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Move your code here from Controller.php
        $featuredServices = [
            ['title' => 'Web Development', 'caption' => 'Custom websites and web applications'],
            ['title' => 'Mobile App Development', 'caption' => 'ios and android solutions'],
            ['title' => 'Digital Marketing', 'caption' => 'SEO, Social Media, Content Marketing'],
            ['title' => 'E-commerce Solutions', 'caption' => 'Online stores and payment integration']
        ];

        $companyHighlights = [
            ['caption' => '8+ Years of Excellence in Digital Solutions'],
            ['caption' => 'Trusted by 150+ Companies Nation Wide'],
        ];

        return view('welcome', compact('featuredServices', 'companyHighlights'));
    }
}