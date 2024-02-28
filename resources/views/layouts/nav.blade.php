
<nav class="bg-[#222] border-b z-50 border-gray-600 fixed top-0 left-0 w-full">
    <div class="container flex flex-wrap items-center justify-between mx-auto p-6">
        <!-- the logo -->
        <a href={{ route('home') }} class="flex items-center grow space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl text-white font-bold whitespace-nowrap">Job<span class="text-blue-400">Conny</span></span>
        </a>
     
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <!-- the links -->
        <div class="hidden grow w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium text-center flex flex-col justify-end px-4 py-10 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="/" class="{{ Route::is('home') ? 'text-blue-400' : 'text-white'; }} block py-2 px-3 bg-blue-700 hover:text-blue-400 rounded md:bg-transparent md:p-0 " >Home</a>
                </li>
                <li>
                    <a href="{{route('users.index')}}" class="{{ Route::is('users.index') ? 'text-blue-400' : 'text-white'; }} block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">Employees</a>
                </li>
                @can('isUserWithoutProfile')
                    <li>
                        <a href="{{route('users.create')}}" class="{{ Route::is('users.create') ? 'text-blue-400' : 'text-white'; }} block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">Complete profile</a>
                    </li>
                @endcan
                @can('isUserWithProfile')
                    <li>
                        <a href="{{route('users.show', Auth::user()->id)}}" class="{{ Route::is('users.show') ? 'text-blue-400' : 'text-white'; }} block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">My profile</a>
                    </li>
                @endcan
                @can('isRepresentativeWithoutCompany')
                    <li>
                        <a href="{{route('rep.dash.company.create')}}" class="{{ Route::is('rep.dash.company.create') ? 'text-blue-400' : 'text-white'; }} block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">Create Company</a>
                    </li>
                @endcan
                @can('isRepresentativeWithCompany')
                    <li>
                        <a href="{{route('rep.dash.recruiters.index')}}" class="text-white block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">Dashboard</a>
                    </li>
                @endcan
                {{-- check if the user logged in --}}
                @if (Auth::check())
                    {{-- check if the user is admin --}}
                    @if (Auth::user()->role_id == 1)
                    @endif
                @endif
                {{-- check if the user is not logged in --}}
                @if (!Auth::check())
                    <li>
                        <a href="{{route('login')}}" class="text-white block py-2 px-3 rounded md:border-0 md:p-0">Sign In</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="text-white bg-blue-700 focus:outline-none hover:bg-blue-800 focus:ring-4 font-medium rounded-full text-sm px-4 py-2.5 me-2 mb-2">Get Started</a>
                    </li>
                @else
                @can('is_admin')
                    <li>
                        <a href="{{route('admin.dashboard.users')}}" class="text-white block mb-8 md:mb-0 py-2 px-3 rounded hover:text-blue-400 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">Dashboard</a>
                    </li>
                @endcan
                    <li>
                        {{-- <a href="{{route('logout')}}" class="text-white bg-red-700 focus:outline-none hover:bg-red-800 focus:ring-4 font-medium rounded-full text-sm px-4 py-2.5 me-2 mb-2">Log Out</a> --}}
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-white bg-red-700 focus:outline-none hover:bg-red-800 focus:ring-4 font-medium rounded-full text-sm px-4 py-1 me-2">Log out</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>