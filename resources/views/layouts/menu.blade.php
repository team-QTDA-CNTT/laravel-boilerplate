<nav class="py-6 mb-8 bg-blue-900 shadow">
    <div class="container px-6 mx-auto md:px-0">
        <div class="flex items-center justify-center">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1 text-right">
                @guest
                    <a class="p-3 text-sm text-gray-300 no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="p-3 text-sm text-gray-300 no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="pr-4 text-sm text-gray-300">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                        class="p-3 text-sm text-gray-300 no-underline hover:underline"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>