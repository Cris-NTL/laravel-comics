<nav class="bg-body-tertiary">
    <div class="container-fluid text-center">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/marchio-sito-test.png') }}" alt="">
        </div>
        <div id="navbarNav" class="justify-content-center d-flex">
            <ul class="list-unstyled d-flex">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Comics</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/characters')}}">Characters</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{url('/movies')}}">Movies</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
