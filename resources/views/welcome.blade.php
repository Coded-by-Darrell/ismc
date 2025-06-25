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

<p>Current time (Philippines): {{ $now->format('Y-m-d H:i:s') }}</p>
<p>Hour: {{ $hour }}</p>

@if($hour < 12)
    <p class="greeting">Good morning! 🌅</p>
@elseif($hour < 18)
    <p class="greeting">Good afternoon! ☀️</p>
@else
    <p class="greeting">Good evening! 🌙</p>
@endif

</section>

    <h1>hello, welcome to ISMC</h1>
        
    <!-- Featured Services-->
    <div>
    <h1>Featured Services:</h1>
    <div>
        @foreach($featuredServices as $service)
        <div>
            <h2>{{ $service['title'] }}</h2>
            <p>{{ $service['caption'] }}</p>
        </div>
    @endforeach
    </div>
    
    </div>
@endsection
    

       

