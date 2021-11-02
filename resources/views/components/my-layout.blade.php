<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIN Document</title>
</head>
@include('partials._header')
<body>
    {{ $slot }}
    {{ $propName }}
    
</body>
</html>