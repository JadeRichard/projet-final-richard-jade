@foreach ($articles as $news)
    <div class="classic-item" id="result">
        <a href={{ route('singlepost', $news->id) }}>
            <img src={{ asset('images/' . $news->picture) }} alt=""></a>
        <ul>
            <li>Posted: <em>{{ $news->date }}</em></li>
            <li>By: <em>{{ $news->user->name }}</em></li>
            <li>Comments: <em>{{ count($news->comments) }}</em></li>
        </ul>
        <a href={{ route('singlepost', $news->id) }}>
            <h4>{{ $news->title }}</h4>
        </a>
        <p>{{ $news->description_1 }}</p>
        <div class="buttons">
            <div class="accent-button">
                <a href={{ route('singlepost', $news->id) }}>Continue Reading</a>
            </div>
        </div>
    </div>
@endforeach

<div class="pagination-navigation">
    <div class="row">
        <div class="col-md-6">
            {{ $articles->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
