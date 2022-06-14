

@foreach ($categories as $categories)
    <div id="category_{{ $categories->name }}" class="categoryfilter" style="display: none;">
        @foreach ($articles as $article)
            @foreach ($article->categories as $item)
                @if ($item->name == $categories->name)
                    <div class="classic-item">
                        <a href={{ route('singlepost', $article->id) }}>
                            <img src={{ asset('images/' . $article->picture) }} alt=""></a>
                        <ul>
                            <li>Posted: <em>{{ $article->date }}</em></li>
                            <li>By: <em>{{ $article->user->name }}</em></li>
                            <li>Comments: <em>{{ count($article->comments) }}</em></li>
                        </ul>
                        <a href={{ route('singlepost', $article->id) }}>
                            <h4>{{ $article->title }}</h4>
                        </a>
                        <p>{{ $article->description_1 }}</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href={{ route('singlepost', $article->id) }}>Continue Reading</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endforeach

@foreach ($tags as $tags)
    <div id="tag_{{ $tags->name }}" class="tagfilter"  style="display: none;">
        @foreach ($articles as $article)
            @foreach ($article->tags as $item)
                @if ($item->name == $tags->name)
                    <div class="classic-item">
                        <a href={{ route('singlepost', $article->id) }}>
                            <img src={{ asset('images/' . $article->picture) }} alt=""></a>
                        <ul>
                            <li>Posted: <em>{{ $article->date }}</em></li>
                            <li>By: <em>{{ $article->user->name }}</em></li>
                            <li>Comments: <em>{{ count($article->comments) }}</em></li>
                        </ul>
                        <a href={{ route('singlepost', $article->id) }}>
                            <h4>{{ $article->title }}</h4>
                        </a>
                        <p>{{ $article->description_1 }}</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href={{ route('singlepost', $article->id) }}>Continue Reading</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endforeach


@foreach ($articles as $article)
                    <div class="classic-item first_filter" id="result">
                        <a href={{ route('singlepost', $article->id) }}>
                            <img src={{ asset('images/' . $article->picture) }} alt=""></a>
                        <ul>
                            <li>Posted: <em>{{ $article->date }}</em></li>
                            <li>By: <em>{{ $article->user->name }}</em></li>
                            <li>Comments: <em>{{ count($article->comments) }}</em></li>
                        </ul>
                        <a href={{ route('singlepost', $article->id) }}>
                            <h4>{{ $article->title }}</h4>
                        </a>
                        <p>{{ $article->description_1 }}</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href={{ route('singlepost', $article->id) }}>Continue Reading</a>
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
