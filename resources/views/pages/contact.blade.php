@extends('layouts.app')

@section('title', 'Contact Us' )

@push('styles')
    <style>
        .error { color: red; font-size: 0.9em; }
        .form-group { margin-bottom: 1rem; }
    </style>
@endpush

@section('content')
<h1>Contact Us</h1>

<div>
    <div>
        <h3>Main Office:</h3>
        <p>Address: {{ $mainOfficeInfo['address']}}</p>
        <p>Phone: {{ $mainOfficeInfo['phone']}}</p>
        <p>Email: {{ $mainOfficeInfo['email']}}</p>
        <p>Business Hours: {{ $mainOfficeInfo['businessHours']}}</p>

    </div>
</div>

{{-- contact form --}}
@include('components.contact.contact-form')

@endsection

@push('scripts')
    <script>
        console.log('Contact page loaded');
    </script>
@endpush




    

