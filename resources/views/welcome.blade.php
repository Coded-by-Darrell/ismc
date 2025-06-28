@extends('layouts.app')

@section('title', 'ISMC' )

@section('content')
    {{-- Hero Section --}}
    <section class="hero">
        <h1>Welcome to Innovations Solution and Marketing Corporation</h1>
        <p>Your trusted partner for digital transformation</p>
    

        {{-- Conditional greeting --}}
        @php
        use Carbon\Carbon;
        
        // Set to your timezone
        $now = Carbon::now('Asia/Manila'); // Philippines timezone
        $hour = $now->hour; // This is already an integer
        @endphp

            {{-- <p>Current time (Philippines): {{ $now->format('Y-m-d H:i:s') }}</p> --}}
            {{-- <p>Hour: {{ $hour }}</p> --}}

            @if($hour < 12)
                <p class="greeting">Good morning! 🌅</p>
            @elseif($hour < 18)
                <p class="greeting">Good afternoon! ☀️</p>
            @else
                <p class="greeting">Good evening! 🌙</p>
            @endif
    </section>

    {{-- Announcement --}}

    {{-- <section class="announcement-board">
        <h1>Company Announcement</h1>

        @forelse ($companyAnnouncements as $announcement)
            @if ($announcement['type'] == 'Promo')
                <h3>{{ $announcement['title']}}</h3>
                <p>{{ $announcement['message'] }}</p>

            @else
            <h3>{{ $announcement['title']}}</h3>
            <p>{{ $announcement['message'] }}</p>
            @endif
        @empty
            <h3>No announcement</h3>
        @endforelse

    </section> --}}

    {{-- <x-announcement-board :announcements="$companyAnnouncements" />> --}}

    <h1>hello, welcome to ISMC</h1>
        
    <!-- Featured Services-->
    <div>
        <h1>Featured Services:</h1>
            <div>
                @foreach($featuredServices as $service)
                <x-service-display 
                    :title = "$service['title']"
                    :caption = "$service['caption']"
                />
            @endforeach
            </div>
    </div>

    {{-- Customer Testimonials--}}
    <section>

        <h1>Customer Testimonials</h1>
        
        {{-- average rate --}}
        @if (count($companyReviews) > 0)
            @php
                $totalRating = 0;
                foreach ($companyReviews as $review) {
                    $totalRating += $review['rating'];
                }
                $averageRating = $totalRating / count($companyReviews);
            @endphp
        @endif

        <div class="star-rating">
            <h2>{{ number_format($averageRating, 1) }} ⭐️</h2>
            <p>({{ count($companyReviews) }} reviews)</p>
        </div>

        {{-- review details --}}
        @forelse ($companyReviews as $review)
            <div>
                <h3>{{ $review['name'] }}</h3>
                <h4>{{ $review['businessName'] }}</h4>
                <p>{{$review['rating']}}</p>
                <p>{{ $review['message'] }}</p>

            </div>
            

        @empty
            <p>No reviews yet</p>
        @endforelse
    </section>
    

@endsection
    

       

