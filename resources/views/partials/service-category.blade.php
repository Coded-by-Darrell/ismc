<div class="service-category">
    <h2>{{ $categoryTitle }}</h2>
    
    <div class="services-grid">
        @forelse($services as $service)
            <div class="service-item">
                <h3>{{ $service['serviceName'] }}</h3>
                
                <div class="pricing">
                    @guest
                        <p>Price: {{ $service['servicePrice'] }}</p>
                        <small>💡 Login for member pricing</small>
                    @else
                        @php
                            $memberPrice = str_replace(['PHP ', ' - PHP '], '', $service['servicePrice']);
                            if (strpos($memberPrice, '/') !== false) {
                                $discountedPrice = $memberPrice . ' (10% member discount applied)';
                            } else {
                                $discountedPrice = 'Member Price: Contact us for quote';
                            }
                        @endphp
                        <p>Member Price: {{ $discountedPrice }}</p>
                    @endguest
                </div>
                
                @auth
                    <button>Request Quote</button>
                @else
                    <a href="/login">Login to Request Quote</a>
                @endauth
            </div>
        @empty
            <p>No {{ strtolower($categoryTitle) }} available at this time.</p>
        @endforelse
    </div>
</div>