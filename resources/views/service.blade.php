<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>services</p>
    <div>
        <h1>Web Development Services:</h1>
        <div>
            @foreach($webdevServices as $webdevService)
                <div>
                    <h2>{{ $webdevService['serviceName']}}</h2>
                    <p>Pricing: {{ $webdevService['servicePrice']}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <h1>Consulting Services:</h1>
        <div>
            @foreach($consultingServices as $consultingService)
                <div>
                    <h2>{{ $consultingService['serviceName']}}</h2>
                    <p>Pricing: {{ $consultingService['servicePrice']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>