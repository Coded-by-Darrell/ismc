@props(['members'])

<div class="team">
    @foreach($members as $member)
    <div class="team-member">
        <h3>{{ $member['name'] }}</h3>
        <p><strong>{{ $member['position'] }}</strong></p>      
    </div>
    @endforeach
</div>