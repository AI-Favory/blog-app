@extends('layout')

@section('content')
<h1>Articles</h1>
<a href="{{ route('articles.create') }}">Créer un nouvel article</a>
<ul>
    @if($articles->isEmpty())
        <p>Aucun article disponible.</p>
    @else
        @foreach($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                <div class="content">{{ $article->content }}</div>
                <a href="{{ route('articles.edit', $article->slug) }}">Éditer</a>
                <form action="{{ route('articles.destroy', $article->slug) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    @endif
</ul>
@endsection