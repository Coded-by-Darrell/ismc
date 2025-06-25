@extends('layouts.app')

@section('title', 'ISMC' )

@section('content')
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
    

       

