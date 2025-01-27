@extends('layout')

@section('content')
<h1 class="text-center text-2xl font-bold my-8">Blog</h1>
@livewire('create-article')
@livewire('article-list')
@endsection