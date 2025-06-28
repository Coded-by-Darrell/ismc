@props(['title', 'caption'])

<div class="service-card">
    <div>
        <h2>{{ $service['title'] }}</h2>
        <p>{{ $service['caption'] }}</p>
    </div>
</div>