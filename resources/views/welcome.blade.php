@extends('layouts.app')

@section('title', 'ISMC - Welcome')

@push('styles')
    <style>
        .greeting { font-size: 1.2em; color: #666; }
        .vip-section { background: gold; padding: 1rem; margin: 1rem 0; }
    </style>
@endpush

@section('content')
    {{-- Dynamic Greeting --}}
    <section class="hero">
        <h1>Welcome to Innovations Solution and Marketing Corporation</h1>
        <p>Your trusted partner for digital transformation</p>
        
        @auth
            <div class="vip-section">
                <h2>🎉 Welcome back, {{ auth()->user()->name }}!</h2>
                <p>Thanks for being a valued ISMC client</p>
                <a href="/dashboard">Go to Dashboard</a>
            </div>
        @endauth

        {{-- Time-based greeting --}}
        @php
            $hour = date('H');
        @endphp

        @if($hour < 12)
            <p class="greeting">Good morning! 🌅</p>
        @elseif($hour < 18)
            <p class="greeting">Good afternoon! ☀️</p>
        @else
            <p class="greeting">Good evening! 🌙</p>
        @endif
    </section>

    {{-- Featured Services --}}
    <div>
        <h1>Featured Services:</h1>
        <div>
            @foreach($featuredServices as $service)
                <x-service-display 
                    :title="$service['title']"
                    :caption="$service['caption']"
                />
            @endforeach
        </div>
    </div>

    {{-- Customer Testimonials --}}
    @include('partials.testimonials', ['reviews' => $companyReviews])

@endsection

@push('scripts')
    <script>
        // Page-specific JavaScript
        console.log('Welcome page loaded for ISMC');
        
        @auth
            console.log('User is logged in: {{ auth()->user()->name }}');
        @else
            console.log('User is a guest');
        @endauth
    </script>
@endpush