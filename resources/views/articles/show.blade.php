@extends('layout')

@section('content')
<h1 class="mb-2 mt-8 text-xl">{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="{{ route('articles.index') }}" class="mt-8 bg-black text-white p-4 block text-center rounded-[5px]">Retour</a>
@endsection