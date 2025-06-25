<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContact extends Controller
{
    public function index() {
        $mainOfficeInfo = [
            'address' => '123 Innovation Street, Makati City, Metro Manila 1234',
            'phone' => '+63 2 8123 4567',
            'email' => 'info@ismc.com.ph',
            'businessHours' => 'Monday - Friday | 8 am - 6 pm'
        ];

        $branchOffices = [
            ['branchLocation' => 'Cebu Office', 'branchAddress' => '456 Tech Avenue, Cebu City, Cebu 6000'], 
            ['branchLocation' => 'Davao Office', 'branchAddress' => '789 Digital Plaza, Davao City, Davao del Sur 8000'] 
        ];

        return view('pages.contact', compact('mainOfficeInfo', 'branchOffices'));
    }
}
