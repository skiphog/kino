<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{

    /**
     * Показать все статьи
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        return view('pages.articles', [
            'articles' => Article::latest()->paginate(10)
        ]);
    }

    /**
     * Показать одну статью по id
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        return view('pages.article', compact('article'));
    }
}
