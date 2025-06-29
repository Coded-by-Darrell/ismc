@props(['review'])


<div>
    <h3>{{ $review['name'] }}</h3>
    <h4>{{ $review['businessName'] }}</h4>
    <p>{{$review['rating']}}</p>
    <p>{{ $review['message'] }}</p>

</div>