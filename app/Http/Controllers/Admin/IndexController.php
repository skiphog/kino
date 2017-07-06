<?php

namespace App\Http\Controllers\Admin;

class IndexController extends Admin
{
    public function index()
    {
        return view('admin.index');
    }
}
