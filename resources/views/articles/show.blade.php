@extends('layout')

@section('content')
<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="{{ route('articles.index') }}">Retour</a>
@endsection