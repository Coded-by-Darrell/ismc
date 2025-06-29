@props(['informations'])

<div class="stats">
    <div class="stat-card">
        <h3>Founded</h3>
        <p>{{ $informations['founded'] }}</p>
    </div>
    <div class="stat-card">
        <h3>Employees</h3>
        <p>{{ $informations['employees'] }}</p>
    </div>
    <div class="stat-card">
        <h3>Projects</h3>
        <p>{{ $informations['projects'] }}</p>
    </div>
    <div class="stat-card">
        <h3>Clients</h3>
        <p>{{ $informations['clients'] }}</p>
    </div>
</div>