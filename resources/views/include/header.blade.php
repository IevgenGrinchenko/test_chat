<nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Test chat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @guest
                <li class="nav-item float-right">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item float-right">
                    <a class="nav-link" href="{{ route('register') }}">Signup</a>
                </li>
                @endguest
                @auth
                    <li class="nav-item float-right">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endauth
            </ul>
            @if(isset($user))
                <span class="navbar-text">
                    {{$user['name']}}
                </span>
            @endif
        </div>
    </div>
</nav>
