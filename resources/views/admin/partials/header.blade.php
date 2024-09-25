<header class="">
    <div class="container-fluid d-flex text-bg-primary justify-content-between p-3">
        <div class="logo">
            <a href="{{ route('home') }}" target="_blank">Vai al sito</a>
        </div>
        <div>
            <ul class="navbar">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}">Registrati</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#">{{ Auth::user()->name }}</a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('admin.home') }}">Admin</a>
                            <a href="{{ route('logout') }}">Logout</a>


                        </div>

                    </li>


                @endguest
            </ul>
        </div>

    </div>
</header>
