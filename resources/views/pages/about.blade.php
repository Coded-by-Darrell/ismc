@extends('layouts.app')

@section('title', 'About Us' )

@section('content')
<div class="container">
    <h1>About Innovations Solution and Marketing Corporation</h1>
    
    <div class="mission">
        <h2>Our Mission</h2>
        <p>Driving digital transformation through innovative solutions</p>
        
        <h2>Our Vision</h2>
        <p>To be the leading technology partner for businesses in the Philippines</p>
    </div>

    <!-- Company Statistics -->
    <h2>Company at a Glance</h2>
    <div class="stats">
        <div class="stat-card">
            <h3>Founded</h3>
            <p>{{ $companyInfo['founded'] }}</p>
        </div>
        <div class="stat-card">
            <h3>Employees</h3>
            <p>{{ $companyInfo['employees'] }}</p>
        </div>
        <div class="stat-card">
            <h3>Projects</h3>
            <p>{{ $companyInfo['projects'] }}</p>
        </div>
        <div class="stat-card">
            <h3>Clients</h3>
            <p>{{ $companyInfo['clients'] }}</p>
        </div>
    </div>

    <!-- Team Members -->
    <h2>Our Leadership Team</h2>
    <div class="team">
        @foreach($teamMembers as $member)
        <div class="team-member">
            <h3>{{ $member['name'] }}</h3>
            <p><strong>{{ $member['position'] }}</strong></p>
            
        </div>
        @endforeach
    </div>

    
</div>
@endsection