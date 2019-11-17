<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // insert biasa
        $blog = new Blog;
        $blog->title = 'Halo Cipanas';
        $blog->description = 'Ini isi dari Halo Cipanas';
        $blog->save();

        // insert dengan mass assignment


        $blogs = Blog::all();
        return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog/single', ['blog' => $blog]);
    }
}
