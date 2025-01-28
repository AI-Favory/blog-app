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
Route::prefix('articles')->group(function () {
    Route::get('/create', CreateArticle::class)->name('articles.create');
    Route::get('/{article}/edit', EditArticle::class)->name('articles.edit');
    Route::get('/', ArticleList::class)->name('articles.list');
    Route::get('/{article}/delete', DeleteArticle::class)->name('articles.delete');
});