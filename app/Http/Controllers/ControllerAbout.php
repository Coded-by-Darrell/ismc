<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAbout extends Controller
{
    public function index() {
       // return view('about');

       //company data
       $companyInfo = [
            'founded' => '2015',
            'employees' => '50+',
            'projects' => '200+',
            'clients' => '150+'
       ];

       $teamMembers = [
        ['name' => 'Mark Zuckerberg', 'position' => 'CEO'],
        ['name' => 'Bill Gates', 'position' => 'CTO'],
        ['name' => 'Elon Musk', 'position' => 'Marketing Director']
       ];

       return view('about', compact('companyInfo', 'teamMembers'));
    }

    
}
