@extends('layouts.app')

@section('title', 'Services')

@section('content')
<h1>Our Services</h1>

@auth
    <div style="background: #e8f5e8; padding: 1rem; margin-bottom: 2rem;">
        <p>✅ <strong>Logged in as {{ auth()->user()->name }}</strong></p>
        <p>🎉 You get 10% discount on all services!</p>
    </div>
@else
    <div style="background: #fff3cd; padding: 1rem; margin-bottom: 2rem;">
        <p>💡 <a href="/login">Login</a> to see member pricing and special offers!</p>
    </div>
@endauth

<!-- Web Development Services -->
@include('partials.service-category', [
    'categoryTitle' => 'Web Development Services',
    'services' => $webdevServices,
    'categoryType' => 'web'
])

<!-- Consulting Services -->
@include('partials.service-category', [
    'categoryTitle' => 'Consulting Services', 
    'services' => $consultingServices,
    'categoryType' => 'consulting'
])

@once
    <div style="margin-top: 2rem; padding: 1rem; background: #f8f9fa;">
        <h3>🔒 Why Choose ISMC?</h3>
        <ul>
            <li>8+ years of experience</li>
            <li>200+ satisfied clients</li>
            <li>Professional team</li>
            <li>Affordable pricing</li>
        </ul>
    </div>
@endonce
@endsection