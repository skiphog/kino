<?php

namespace App\Http\Controllers;

use App\Album;

class AlbumController extends Controller
{
    public function index()
    {
        return view('pages.albums', [
            'albums' => Album::with('songs')->get()
        ]);
    }
}
