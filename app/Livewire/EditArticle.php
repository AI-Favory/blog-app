<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;

class EditArticle extends Component
{
    public $article;
    public $title;
    public $content;
    public $showModal = false;

    protected $rules = [
        'title' => 'required|min:10',
        'content' => 'required|min:20',
    ];

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->content = $article->content;
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function update()
    {
        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'content' => $this->content,
            'excerpt' => substr($this->content, 0, 100),
            'slug' => Str::slug($this->title),
        ]);

        $this->closeModal();
        $this->dispatch('articleUpdated');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}