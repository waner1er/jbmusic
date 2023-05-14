<nav class="bg-primary-400 text-white border-gray-200 ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 h-56">
        <a href="{{ route('home') }}" class="flex flex-col items-center">
            <img src="" class="h-8 mr-3" alt="JbMusic Logo"/>
            <span class="self-center font-semibold whitespace-nowrap ">{{ config('app.name') }}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                 aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto z-20" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:items-center
                       md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
                <li>
                    <a href="{{ route('home') }}"
                       class="block py-2 pl-3 pr-4  md:bg-transparent
                       {{ $home ? 'text-third-600 font-bold text-xl' : 'text-white' }} "
                       aria-current="page">Home</a>
                </li>
                <li>

                    <a href="{{ route('courses.index') }}"
                       class="block py-2 pl-3 pr-4   md:bg-transparent
                       {{$cours ? 'text-third-600 bg-bold text-xl' : 'text-white'}}  md:p-0 "
                       aria-current="home">Cours</a>
                </li>
                <li> 

                    <a href="{{ route('prestations.index') }}"
                       class="block py-2 pl-3 pr-4   md:bg-transparent
                       {{$prestations ? 'text-third-600 bg-bold text-xl' : 'text-white'}}  md:p-0 "
                       aria-current="home">Prestations</a>
                </li>
                <li class="md:hidden">
                    <a href="{{ route('contact') }}"
                       class="block py-2 pl-3 pr-4   md:bg-transparent
{{--                       {{$contact ? 'text-third-600 bg-bold text-xl' : 'text-black'}} --}}
                        md:p-0 "
                       aria-current="home">Contact</a>
                </li>

            </ul>
        </div>
        <div class="hidden md:flex flex-nowrap">
            <a href="{{ route('contact') }}" class="mx-5">Contact</a>
            @auth
                <a class="btn bg-transparent hover:bg-white hover:text-accent-content/90 z-10"
                   href="{{ route('dashboard') }}">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" class="mx-5">
                    @csrf
                    <a class="btn bg-transparent hover:bg-white hover:text-accent-content/90 z-10"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            @else
                <a class="btn bg-transparent hover:bg-white hover:text-accent-content/90 z-10"
                   href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </div>
</nav>

