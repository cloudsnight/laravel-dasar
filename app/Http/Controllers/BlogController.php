<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/home');
    }

    public function show($id)
    {
        // -- menguji parameter id -- //
        // 
        // return $id;
        // 
        // ------------------------- //

        // Mengirim data ke-view menggunakan ['id' => $id] //
        // konsepnya['nama_variabel_untuk_view' => $variabel_lain] //
        // return view('blog/single', ['id' => $id]);

        // $nilai = 'ini adalah linkya yang ke-'. $id;
        // return view('blog/single', ['nilai' => $nilai]);

        // Menggunakan variabel lebih dari dua yang akan dikirim ke view ------------//
        // 
        // $nilai = 'ini adalah linkya dengan nomor id : '. $id;
        // $user = 'Abdul Muchsin';
        // return view('blog/single', ['nilai' => $nilai, 'user' => $user]);
        // 
        // -------------------------------------------------------------------------//

        // Menggunakan variabel yang berisi array
        $nilai = 'ini adalah linkya dengan nomor id : '. $id;
        $users = ['Muksin', 'Husen', 'Hasanah'];
        $unescaped = '<script>alert("ini adalah alert dari unescaped !");</script>';
        return view('blog/single', ['nilai' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
    }
}
