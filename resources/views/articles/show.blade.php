@extends('layouts.app')

@section('content')
<h1 class="mb-2 mt-8 text-xl">{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<a href="/" class="w-full bg-blue-500 text-white px-4 py-2 rounded block text-center mt-2">Retour</a>
@endsection