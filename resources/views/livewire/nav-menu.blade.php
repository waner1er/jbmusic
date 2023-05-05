<div class="navbar bg-black text-white">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-primary rounded-box w-52">
                <li class="hover:bg-base-100 hover:text-primary rounded-sm"><a
                        href="{{ route('courses.index') }}">Cours</a>
                </li>
                <li class="hover:bg-base-100 hover:text-primary rounded-sm"><a
                        href="{{ route('prestations.index') }}">Prestation</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost normal-case text-xl" href="{{ route('home') }}">
            <x-logo />
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li class="hover:bg-base-100 hover:text-primary rounded-sm"><a href="{{ route('courses.index') }}">Cours</a>
            </li>
            <li class="hover:bg-base-100 hover:text-primary rounded-sm"><a
                    href="{{ route('prestations.index') }}">Prestation</a></li>
        </ul>
    </div>

    <div class="navbar-end">
        <a class="btn btn-info rounded-xl" href="{{ route('contact') }}">Contact</a>
        @auth
            <a class="btn btn-ghost" href="{{ route('dashboard') }}">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="btn btn-ghost" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Logout') }}
                </a>
            </form>
        @else
            <a class="btn btn-ghost" href="{{ route('login') }}">Login</a>
        @endauth
    </div>
</div>
