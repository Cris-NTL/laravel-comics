{{-- navbar (logo, links, searchbar) --}}
<nav class="bg-body-tertiary">
    <div class="container d-flex align-items-center h-100">

        {{-- logo img --}}
        <div class="logo me-5">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
        </div>

        {{-- navbar links --}}
        <div id="navbarNav" class="justify-content-center d-flex">
            <ul class="list-unstyled d-flex m-0">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">COMICS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/characters') }}">CHARACTERS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/movies') }}">MOVIES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/tv') }}">TV</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/games') }}">GAMES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/collectibles') }}">COLLECTIBLES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/videos') }}">VIDEOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/fans') }}">FANS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/news') }}">NEWS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                </li>
            </ul>
        </div>

        {{-- searchbar --}}
        <div class="ms-auto">
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>

    </div>

</nav>

{{-- jumbo --}}
<div class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
</div>