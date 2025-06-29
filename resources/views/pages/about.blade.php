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
    <x-company-statistics :informations="$companyInfo" />
    

    <!-- Team Members -->
    <h2>Our Leadership Team</h2>
    <x-team-members :members="$teamMembers" />
    

    
</div>
@endsection