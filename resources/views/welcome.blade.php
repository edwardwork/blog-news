@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ route('home') }}" method="GET">
            <select name="category_id_filter" id="" class="custom-select custom-select-lg mb-3">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id == request('category_id_filter')) selected @endif>
                        {{ $category->title }}</option>
                @endforeach
            </select>
            <button class="btn btn-primary" type="submit">Apply</button>
            <a href="{{ route('home') }}" class="text-white">
                <button class="btn btn-primary" type="button">
                    Reset
                </button>
            </a>

        </form>

        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif

        @foreach($news as $item)
            @include('news.card')
        @endforeach

        <div class="mt-4">
            {{ $news->render() }}
        </div>

    </div>
@endsection
