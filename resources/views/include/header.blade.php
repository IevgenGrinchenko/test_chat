<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Test chat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="#">Home</a>--}}
{{--                </li>--}}
                <li class="nav-item float-right">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item float-right">
                    <a class="nav-link" href="{{ route('register') }}">Signup</a>
                </li>
            </ul>
{{--            <span class="navbar-text">--}}
{{--        Navbar text with an inline element--}}
{{--      </span>--}}
        </div>
    </div>
</nav>
