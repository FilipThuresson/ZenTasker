<x-app-layout>
    <div class="flex">
        <div class="w-1/6 px-4 bg-bg min-h-[calc(100vh_-_100px)] max-h-fit border-t border-stext">
           <ul class="divide-y divide-stext text-text">
               <li class="py-2">
                   <a href="{{ route('dashboard.index') }}" class="{{ request()->routeIs('dashboard.index') ? 'active_aside' : ''  }}">
                       <i class="fa fa-home"></i>
                       Home
                   </a>
               </li>
               <li class="py-2">
                   <a href="{{ route('dashboard.index') }}" class="hover:ml-6 duration-200">
                       <i class="fa-solid fa-table-list"></i>
                       Tasks
                   </a>
               </li>
               <li class="py-2">
                   <a href="{{ route('dashboard.members') }}" class="hover:ml-6 duration-200 {{ request()->routeIs('dashboard.members') ? 'active_aside' : '' }}">
                       <i class="fa fa-users"></i>
                       Team members
                   </a>
               </li>
           </ul>
        </div>
        <div class="w-5/6">
            {{$slot}}
        </div>
    </div>
</x-app-layout>
