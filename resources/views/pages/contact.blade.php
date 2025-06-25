@extends('layouts.app')

@section('contact')
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



<!--Form-->

@endsection
    

