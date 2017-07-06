<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
