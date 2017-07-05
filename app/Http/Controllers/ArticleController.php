<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{

    public function index()
    {
        return view('pages.articles', [
            'articles' => Article::latest()->paginate(10)
        ]);
    }

    public function show(Article $article)
    {
        return view('pages.article', compact('article'));
    }
}
