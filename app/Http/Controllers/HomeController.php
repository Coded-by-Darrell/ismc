<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
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

        $companyAnnouncements = [
                ['title' => 'New Office Opening',
                'message' => 'We are expanding to Cebu City this December!',
                'type' => 'Announcement',
                'urgent' == false
            ],

            [
                'title' => 'Holiday Promotion',
                'message' => '20% off all web development services until December 31st',
                'type' => 'Promo',
                'urgent' == true
            ],

            [
                'title' => 'Team Expansion',
                'message' => 'We\'ve hired 5 new developers to better serve our clients',
                'type' => 'Announcement',
                'urgent' == false
            ]  
        ];

        $companyReviews = [
                [
                    'name' => 'Maria Santos',
                    'businessName' => 'Tech Startup Inc.',
                    'message' => 'Excellent service and professional team!',
                    'rating' => '5'
                ],

                [
                    'name' => 'Juan Dela Cruz',
                    'businessName' => 'Local Business Co.',
                    'message' => 'They helped us grow our online precense significantly.',
                    'rating' => '5'
                ],

                [
                    'name' => 'Ana Rodrigues',
                    'businessName' => 'E-commerce Store',
                    'message' => 'I liked the service but they didnt reach my expectation',
                    'rating' => '3'
                ]
        ];



        return view('welcome', compact('featuredServices', 'companyHighlights', 'companyAnnouncements', 'companyReviews'));
    }
}