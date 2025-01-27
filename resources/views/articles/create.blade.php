@extends('layout')

@section('content')
<h1>Créer un article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titre" required>
    <textarea name="content" placeholder="Contenu" required></textarea>
    <button type="submit">Créer</button>
</form>
@endsection