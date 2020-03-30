@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('news.update', ['news' => $news->id]) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" required id="title" value="{{ $news->title }}" placeholder="Title of news" name="title">
            </div>
            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea class="form-control" id="body" rows="3" required name="body">{{ $news->body }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Example select</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $news->category->id) selected @endif>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" @if ($news->is_active) checked @endif id="is_active" type="checkbox" value="1" name="is_active">
                <label class="form-check-label" for="is_active">
                    Is active news
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-4 update-news" data-news-id="{{ $news->id }}">
                Update
            </button>
        </form>
    </div>
@endsection

@push('scripts')
{{--    <script defer>--}}
{{--        $(document).ready(function () {--}}
{{--            $('.update-news').on('click', function (e) {--}}
{{--                console.log('asdasd')--}}
{{--                let id = $(this).data('news-id');--}}
{{--                let form = $(this).closest('form');--}}
{{--                let result = {};--}}
{{--                for(let item of form.serializeArray()) {--}}
{{--                    result[item.name] = item.value;--}}
{{--                }--}}

{{--                axios.put("/news/" + id,  result)--}}
{{--                    .then(response => {--}}
{{--                        if (response.status === 204) {--}}
{{--                            location.href = "/manager";--}}
{{--                        }--}}
{{--                    })--}}
{{--                    .catch(error => {--}}
{{--                        if(Object.keys(error.response.data.errors).length > 0) {--}}
{{--                            for(let key in error.response.data.errors) {--}}
{{--                                console.log(error.response.data.errors[key][0]);--}}
{{--                            }--}}
{{--                        }--}}
{{--                    } );--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
@endpush
