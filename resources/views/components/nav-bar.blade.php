<div class="w-100 py-6 bg-bg">
    <div class="flex items-center justify-between mx-20">
        <div>
            <h1 class="font-semibold text-2xl text-text "><a href="{{route('index')}}">ZenTasker</a></h1>
        </div>
        <div class="text-stext flex gap-6">
            @auth
                <a href="#" title="Notifications"><i class="fa-solid fa-bell"></i></a>
                <a href="#" title="Your Teams"><i class="fa-solid fa-users"></i></a>
                <a href="{{ url('/dashboard') }}" class="{{ request()->routeIs('dashboard.*') ? 'active' : ''  }}" title="Your Dashboard">Dashboard</a>

                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown">{{ Auth::user()->name }}</button>

                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <form method="POST" action="{{route('logout')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @csrf
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit()">
                                {{  __('Logout') }}
                            </a>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" >Register</a>
                @endif
            @endauth
        </div>
    </div>

</div>
