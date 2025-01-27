<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleList extends Component
{
    protected $listeners = [
        'articleCreated' => '$refresh',
        'articleDeleted' => '$refresh',
        'articleUpdated' => '$refresh',
    ];
    
    public function render()
    {
        $articles = Article::all();
        return view('livewire.article-list', compact('articles'));
    }
}
