@props(['announcements'])

<section class="announcement-board">
    <h1>Company Announcement</h1>

    @forelse ($announcements as $announcement)
        @if ($announcement['type'] == 'Promo')
            <h3>{{ $announcement['title']}}</h3>
            <p>{{ $announcement['message'] }}</p>

        @else
        <h3>{{ $announcement['title']}}</h3>
        <p>{{ $announcement['message'] }}</p>
        @endif
    @empty
        <h3>No announcement</h3>
    @endforelse

</section>