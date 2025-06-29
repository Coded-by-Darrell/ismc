@props(['reviews'])

<section>
    <h2>⭐ Customer Testimonials</h2>
    
    {{-- Average rating calculation (your existing code) --}}
    @if(count($reviews) > 0)
        @php
            $totalRating = 0;
            foreach($reviews as $review) {
                $totalRating += $review['rating'];
            }
            $averageRating = $totalRating / count($reviews);
        @endphp
        
        <div class="average-rating">
            <h3>Average Rating: {{ number_format($averageRating, 1) }}/5</h3>
            <div class="stars">
                @for($i = 1; $i <= 5; $i++)
                    <span>{{ $i <= $averageRating ? '★' : '☆' }}</span>
                @endfor
            </div>
            <p>({{ count($reviews) }} reviews)</p>
        </div>
    @endif

    {{-- Individual reviews --}}
    @forelse($reviews as $review)
        <x-review-card :review="$review" />
    @empty
        <p>No reviews yet. Be the first to leave a review!</p>
    @endforelse
</section>