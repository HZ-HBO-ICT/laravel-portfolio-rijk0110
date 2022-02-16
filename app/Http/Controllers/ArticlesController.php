<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $articles = Article::find($id);

        return view('articles/show', ['articles' => $articles]);
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();
        return redirect('/article');
    }
    public function index()
    {
        $articles = Article::all();
        return view('/article',['articles' => $articles]);
    }

}
