<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Admin
{
    /**
     * Показать все новости с пагинацией
     *
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::latest()->paginate(10)
        ]);
    }

    /**
     * Показать форму для добавления статьи
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Записать новую статью
     *
     * @param ArticleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());

        return redirect(route('articles.index'))->with('flash', 'Статья создана');
    }

    /**
     * Показать форму редактирования статьи
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Сохранить отредактированную статью
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return back()->with('flash', 'Статья сохранена');
    }

    /**
     * Удалить статью
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('flash', 'Статья удалена');
    }
}
