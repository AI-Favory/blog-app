<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {  
        // Générer un extrait à partir du contenu
        $excerpt = substr($request->input('content'), 0, 100);

        // Générer un slug à partir du titre
        $slug = Str::slug($request->input('title'));
    
        // Créer un nouvel article avec l'extrait généré
        Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'excerpt' => $excerpt,
            'slug' => $slug,
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
    
        $article = Article::findOrFail($id);

        // Générer un nouveau slug si le titre a été modifié
        if ($request->input('title') !== $article->title) {
            $slug = Str::slug($request->input('title'));
            $article->slug = $slug;
        }

        // Mettre à jour les autres champs
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->excerpt = substr($request->input('content'), 0, 100);

        $article->save();
        
        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
