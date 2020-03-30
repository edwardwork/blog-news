@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 class="card-title">
            <h2>{{ $news->title }}</h2>
        </h5>

        <p class="card-text text-secondary">{{ $news->body }}</p>

        <h5>
            <button type="button" class="btn btn-success">
                {{ $news->category->title }}
            </button>
        </h5>

        <a href="{{ route('home') }}">
            <button type="button" class="btn btn-primary">
                К списку новостей
            </button>
        </a>
    </div>
@endsection
