<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view('pages.albums', [
            'albums' => Album::withCount('songs')->get()->load('songs')
        ]);
    }
}
