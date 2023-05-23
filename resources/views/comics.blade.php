@extends('layouts.app')

@section('content')
    <div class="comics-container">
        <div class="container">
            <h3 class="px-4 py-1 m-0">CURRENT SERIES</h3>
            <div class="row row-cols-6 g-3 pt-5">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card border-0 mb-3">
                            <div class="img">
                                <img src="{{ $book['thumb'] }}" alt="book">
                            </div>
                            <div class="card-body p-0">
                                <h5 class="card-title">{{ $book['title'] }}</h5>
                                <p class="card-title">{{ $book['series'] }}</p>
                                <p class="card-title">{{ $book['type'] }}</p>
                                <p class="card-title">{{ $book['price'] }}</p>
                                <p class="card-title">{{ $book['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
