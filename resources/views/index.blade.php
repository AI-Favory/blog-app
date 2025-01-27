@extends('layout')

@section('content')
<h1>Articles</h1>
@livewire('create-article')
@livewire('article-list')
@endsection