@extends('layouts.app')

@section('content')
    <div class="comics-container">
        <div class="container">
            <h5 class="px-4 py-2 m-0">CURRENT SERIES</h5>
            <div class="row row-cols-6 g-3 pt-5">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card border-0 mb-3">
                            <div class="img">
                                <img src="{{ $book['thumb'] }}" alt="book">
                            </div>
                            <div class="card-body p-0">
                                <h4 class="card-title">{{ $book['title'] }}</h4>
                                <p class="card-title">{{ $book['series'] }}</p>
                                <p class="card-title">{{ $book['type'] }}</p>
                                <p class="card-title">{{ $book['price'] }}</p>
                                <p class="card-title">{{ $book['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="btn d-flex mt-4 pb-3">
                <button class="py-1 px-5 fw-bold b-0">LOAD MORE</button>
            </div>
        </div>
    </div>
@endsection
