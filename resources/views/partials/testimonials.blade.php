<section>
    <h1>Customer Testimonials</h1>
    
    @if(count($reviews) > 0)
        @php
            $totalRating = 0;
            foreach($reviews as $review) {
                $totalRating += $review['rating'];
            }
            $averageRating = $totalRating / count($reviews);
        @endphp
        
        <div class="star-rating">
            <h2>{{ number_format($averageRating, 1) }} ⭐️</h2>
            <p>({{ count($reviews) }} reviews)</p>
        </div>
    @endif

    @forelse($reviews as $review)
        <div>
            <h3>{{ $review['name'] }}</h3>
            <h4>{{ $review['businessName'] }}</h4>
            <p>Rating: {{ $review['rating'] }}/5</p>
            <p>"{{ $review['message'] }}"</p>
        </div>
    @empty
        <p>No reviews yet</p>
    @endforelse
</section>