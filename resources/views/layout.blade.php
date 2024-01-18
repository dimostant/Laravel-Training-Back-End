<html>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB - @yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

<div class="container-fluid">
        @yield('content')
</div>
    
</body>
</html>