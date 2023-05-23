@extends('layouts.app')

@section('content')
    <div class="comics-container py-4">
        <div class="container">
            <h2>Current Series</h2>
            <div class="row row-cols-6 g-3">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $book['thumb'] }}" alt="book">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
