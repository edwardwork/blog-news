@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" required id="title" placeholder="Title of news" name="title">
            </div>
            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea class="form-control" id="body" rows="3" required name="body"></textarea>
            </div>
            <div class="form-group">
                <label for="category">Example select</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="is_active" type="checkbox" value="1" name="is_active">
                <label class="form-check-label" for="is_active">
                    Is active news
                </label>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-primary mt-4">
                Save
            </button>
        </form>
    </div>
@endsection
