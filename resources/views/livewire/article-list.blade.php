<div>
    <ul>
        @if($articles->isEmpty())
            <p>Aucun article disponible.</p>
        @else
            @foreach($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                    <div class="content">{{ $article->content }}</div>
                    <a href="{{ route('articles.edit', $article->slug) }}">Éditer</a>
                    @livewire('delete-article', ['article' => $article], key($article->id))
                </li>
            @endforeach
        @endif
    </ul>
</div>
