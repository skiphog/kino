<?php

namespace App\Http\Controllers;

use App\Album;

class AlbumController extends Controller
{
    /**
     * Показать все альбомы со связанными песнями
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('pages.albums', [
            'albums' => Album::with('songs')->get()
        ]);
    }
}
