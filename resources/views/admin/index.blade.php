@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                    @include('admin.news.card')
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $news->render() }}
        </div>

    </div>
@endsection

@push('scripts')
    <script defer>
        $(document).ready(function () {
            $('.delete-news').on('click', function (e) {
                if(confirm("Are you sure?")) {
                    let id = $(this).data('news-id');

                    axios.delete("/news/" + id)
                        .then(response => {
                            if (response.status === 204) {
                                location.reload();
                            }
                        });
                }
            });
        })
    </script>
@endpush