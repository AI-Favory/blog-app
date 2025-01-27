<div>
    <ul>
        @if($articles->isEmpty())
            <p>Aucun article disponible.</p>
        @else
            @foreach($articles as $article)
                <li wire:key="article-{{ $article->id }}" class="p-4 mb-4 bg-gray-100 rounded-[5px]">
                    <h1 class="mb-2 text-xl">{{ $article->title }}</h1>
                    <div class="content">{{ $article->excerpt }}... <a href="{{ route('articles.show', $article->slug) }}" >[Lire la suite]</a></div>
                    <div class="flex justify-end gap-2.5 mt-4">
                        @livewire('edit-article', ['article' => $article], key('edit-'.$article->id))
                        @livewire('delete-article', ['article' => $article], key('delete-'.$article->id))
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>
