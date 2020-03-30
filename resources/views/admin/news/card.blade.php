<tr>
    <th class="align-middle" scope="row">{{ $item->id }}</th>
    <td class="align-middle">
        <a href="{{ route('news.show', ['news' => $item->id]) }}" target="_blank">{{ $item->title }}</a>
    </td>
    <td class="align-middle">{{ $item->body }}</td>
    <td class="align-middle">
        <button type="button" class="btn btn-success">
            {{ $item->category->title }}
        </button>
    </td>
    <td class="align-middle">
        <a href="{{ route('news.edit', ['news' => $item->id]) }}" target="_blank">
            <button type="submit" class="btn btn-primary mt-2">
                Edit
            </button>
        </a>
        <button type="button" class="btn btn-danger mt-2 delete-news" data-news-id="{{ $item->id }}">
            Delete
        </button>
    </td>
</tr>