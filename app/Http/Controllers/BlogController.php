<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog/home', ['blogs' => $blogs]);
    }

    public function create()
    {
        return view('blog/create');
    }

    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->updated_at = null;
        $blog->save();

        return redirect('blog');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        if(!$blog) abort(404);
        return view('blog/single', ['blog' => $blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        // cek bilamana tidak ada id nya maka akan dilempar ke page 404.
        if(!$blog) abort(404);

        return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        // cek request guna melihat hasil response dari input pada view kita dengan die dump. //
        // dd($request);
        // ---------------------------------------------------------------------------------- //

        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->save();
        return '<a href="/blog/'.$id.'">Klik sini untuk menge-cek</a>';
    }
}
