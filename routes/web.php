<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Livewire\CreateArticle;
use App\Livewire\EditArticle;
use App\Livewire\ArticleList;
use App\Livewire\DeleteArticle;

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

// Routes Livewire
Route::get('/articles/create', CreateArticle::class)->name('articles.create');
Route::get('/articles/{article}/edit', EditArticle::class)->name('articles.edit');
Route::get('/articles', ArticleList::class)->name('articles.list');
Route::get('/articles/{article}/delete', DeleteArticle::class)->name('articles.delete');