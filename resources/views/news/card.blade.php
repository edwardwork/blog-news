<div class="card mt-2">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('news.show', ['news' => $item->id]) }}">{{ $item->title }}</a>
        </h5>
        <p class="card-text">{{ $item->body }}</p>
        <h5>Категория: {{ $item->category->title }}</h5>
    </div>
</div>