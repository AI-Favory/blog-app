<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Support\Str;

class CreateArticle extends Component
{
    public $title = '';
    public $content = '';

    protected $rules = [
        'title' => 'required|min:10',
        'content' => 'required|min:20',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'excerpt' => substr($this->content, 0, 100),
            'slug' => Str::slug($this->title),
        ]);

        session()->flash('success', 'Article created successfully.');

        return redirect()->route('articles.index');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
