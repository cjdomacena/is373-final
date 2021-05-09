<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $blog->title }}</title>
</head>
<body>
@include('navigation-menu');
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>
