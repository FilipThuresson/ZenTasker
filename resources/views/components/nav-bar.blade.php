<div class="w-100 py-6 bg-bg h-fit">
    <div class="flex items-center justify-between mx-20">
        <div>
            <h1 class="font-semibold text-2xl text-text "><a href="{{route('index')}}">ZenTasker</a></h1>
        </div>
        <div class="text-stext text-lg flex gap-6 items-center">
            @auth
                <a href="#" title="Notifications"><i class="fa-solid fa-bell"></i></a>
                <!--<a href="{{ route('teams.index') }}" title="Your Teams" class="{{ request()->routeIs('teams.*') ? 'active': '' }}"><i class="fa-solid fa-users"></i></a>
                -->
                <button id="dropdownTeamsButton" data-dropdown-toggle="dropdownteams" class="{{ request()->routeIs('teams.*') ? 'active': '' }}"><i class="fa-solid fa-users"></i></button>
                <a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.*') ? 'active' : ''  }}" title="Your Dashboard"><i class="fa-solid fa-chart-gantt"></i></a>
                <div class="flex flex-col justify-start {{ request()->routeIs('profile.*') ? 'active': '' }}">
                    <button class="text-base" id="dropdownDefaultButton" data-dropdown-toggle="dropdown" >{{ Auth::user()->name }}</button>
                    <a href="#" class="block py-2 text-xs"><p><i class="fa fa-circle text-success"></i> {{ $active_team->name }}</p></a>
                </div>

            @else
                <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" >Register</a>
                @endif
            @endauth
        </div>
    </div>


    <!-- -------------DROP DOWNS------------- -->

    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
            <div>{{ Auth::user()->name }}</div>
            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="{{ route('profile.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
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

    <div id="dropdownteams" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="{{ route('teams.index') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><p><i class="fa fa-home"></i> Teams</p></a>
            </li>
        </ul>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
                <a href="{{ route('teams.create') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><p><i class="fa fa-plus"></i> Create a team</p></a>
            </li>
        </ul>
    </div>

</div>
