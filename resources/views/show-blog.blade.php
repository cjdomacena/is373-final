<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $blog->title }}</title>
</head>
<body>
@include('components.nav');
{{--<div class="relative flex items-top justify-center h-14 bg-indigo-800 dark:bg-indigo-900 sm:items-center sm:pt-0">--}}
{{--    @if (Route::has('login'))--}}
{{--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--            <a href="{{ route('home') }}" class="text-sm text-white underline  hover:text-gray-700">Home</a>--}}
{{--            @auth--}}
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--            @else--}}

{{--                <a href="{{ route('login') }}" class="text-sm text-white underline  hover:text-gray-700">Log in</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline hover:text-gray-700">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}
    <div class="container mx-auto py-10">
        @yield('content')
    </div>
</body>
</html>
