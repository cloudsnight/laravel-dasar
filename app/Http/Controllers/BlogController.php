<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        // ------------------ insert biasa --------------------- //
        // $blog = new Blog;
        // $blog->title = 'Halo Cipanas';
        // $blog->description = 'Ini isi dari Halo Cipanas';
        // $blog->save();
        // ---------------------------------------------------  //

        // ---------- insert dengan mass assignment ----------- //
        // Blog::create([
        //     'title' => 'Halo Gajrug',
        //     'description' => 'Ini isi dari Halo Gajrug',
        //     'updated_at' => null
        // ]);
        // ---------------------------------------------------  //

        // ------------------ update biasa --------------------- //
        // $blog = Blog::where('title', 'Halo Curug 3')->first();
        // $blog->title = 'Halo Mandala';
        // $blog->save();
        // ---------------------------------------------------  //

        // ---------- update dengan mass assignment ----------- //
        // Blog::find(6)->update([
        //     'title' => 'Halo Curug',
        //     'description' => 'Ini isi dari Halo Curug'
        // ]);
        // ---------------------------------------------------  //

        // ------------------ delete biasa --------------------- //
        // $blog = Blog::find(12);
        // $blog->delete();
        // ---------------------------------------------------  //

        // ---------- delete dengan mass assignment ----------- //
        // Blog::destroy(13);
        // ---------------------------------------------------  //

        $blogs = Blog::all();
        return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        if(!$blog){
            return abort(404);
        }
        return view('blog/single', ['blog' => $blog]);
    }
}
