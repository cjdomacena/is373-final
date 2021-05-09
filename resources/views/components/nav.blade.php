
<section>
    <div class="relative flex items-top justify-center h-14 bg-white border-b border-gray-100 sm:items-center
    sm:pt-0">

    @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">Dashboard</a>
                @else
                    <a href="{{ route("home") }}" class="text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700
        focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150 mr-4">Home</a>
                    <a href="{{ route('login') }}" class="text-gray-500  hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</section>
