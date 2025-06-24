<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ISMC</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; }
        .stats { display: flex; gap: 20px; margin: 30px 0; }
        .stat-card { background: #f4f4f4; padding: 20px; border-radius: 8px; text-align: center; flex: 1; }
        .team { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin: 30px 0; }
        .team-member { background: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        h1, h2 { color: #333; }
        .mission { background: #e8f4fd; padding: 20px; border-radius: 8px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Innovations Solution and Marketing Corporation</h1>
        
        <div class="mission">
            <h2>Our Mission</h2>
            <p>Driving digital transformation through innovative solutions</p>
            
            <h2>Our Vision</h2>
            <p>To be the leading technology partner for businesses in the Philippines</p>
        </div>

        <!-- Company Statistics -->
        <h2>Company at a Glance</h2>
        <div class="stats">
            <div class="stat-card">
                <h3>Founded</h3>
                <p>{{ $companyInfo['founded'] }}</p>
            </div>
            <div class="stat-card">
                <h3>Employees</h3>
                <p>{{ $companyInfo['employees'] }}</p>
            </div>
            <div class="stat-card">
                <h3>Projects</h3>
                <p>{{ $companyInfo['projects'] }}</p>
            </div>
            <div class="stat-card">
                <h3>Clients</h3>
                <p>{{ $companyInfo['clients'] }}</p>
            </div>
        </div>

        <!-- Team Members -->
        <h2>Our Leadership Team</h2>
        <div class="team">
            @foreach($teamMembers as $member)
            <div class="team-member">
                <h3>{{ $member['name'] }}</h3>
                <p><strong>{{ $member['position'] }}</strong></p>
                
            </div>
            @endforeach
        </div>

        
    </div>
</body>
</html>