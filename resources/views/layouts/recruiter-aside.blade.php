
<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#111]">
        <ul class="space-y-2 font-medium">
            <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="material-symbols-outlined">
                    home
                </span>
                <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
            </a>
            <li class="rounded-lg">
                <a href="{{route('recruiter.joboffers.index')}}" class="{{Route::is('recruiter.joboffers.index') ? 'bg-gray-700' : ''}} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="material-symbols-outlined">
                        scatter_plot
                    </span>
                    <span class="flex-1 ms-3 whitespace-nowrap">Job Offers</span>
                </a>
            </li>
            <li class="rounded-lg">
                <a href="{{route('admin.sectors.index')}}" class="{{Route::is('admin.sectors.index') ? 'bg-gray-700' : ''}} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-vector-square"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sectors</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 w-full group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>
                        <span class="ms-3 whitespace-nowrap">Log out</span>
                    </button>

                </form>
                {{-- <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                </a> --}}
            </li>
        </ul>
    </div>
</aside>