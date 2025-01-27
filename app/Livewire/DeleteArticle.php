<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class DeleteArticle extends Component
{
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;
    }

    public function delete()
    {
        $this->article->delete();
        $this->dispatch('articleDeleted');
    }

    public function render()
    {
        return view('livewire.delete-article');
    }
}
