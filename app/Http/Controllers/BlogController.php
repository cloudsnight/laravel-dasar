<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Facades\DB Penting untuk pemanggilan DB::table atau semacamnya //
use Illuminate\Support\Facades\DB;
// Menggunakan Model dari yang telah kita buat
// Model yang digunakan terletak dibawah folder App\Models
use App\Models\Blog;
use App\Ngasal_Banget;

class BlogController extends Controller
{
    // Fungsi ini menampilkan /blog
    public function index()
    {
        // -- Testing Model non-konvensional -- //
            // $blogs = Ngasal_Banget::all();
        // ----------------------------------- //

        $blogs = Blog::all();
        return view('blog/home' , ['blogs' => $blogs]);
    }

    // Fungsi ini menampilkan blog/{id}
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
        // $users = ['Muksin', 'Husen', 'Hasanah'];
        // $users = DB::table('users')->get();
        // $users = DB::table('users')->where('username', 'like', '%m%')->get();

        // --------------------- Metode insert ------------------------- //
        // DB::table('users')->insert([
        //     ['username' => 'test_user', 'password' => '223ajsd']
        // ]);
        // ----------------------------------------------------------- //

        // --------------------- Metode update ------------------------- //
        // DB::table('users')->where('username', 'Ilonabionica')->update(['username' => 'Bumblewolf']);
        // ----------------------------------------------------------- //

        // --------------------- Metode Delete ------------------------- //
        // Eksekusi delete bilamana nilai id lebih besar dari 5.
        // DB::table('users')->where('id', '>', 5)->delete();
        // ----------------------------------------------------------- //
        
        // $users = DB::table('users')->get();
        // $unescaped = '<script>alert("ini adalah alert dari unescaped !");</script>';
        // return view('blog/single', ['nilai' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);

        $blog = Blog::find($id);
        return view('blog/single', ['blog' => $blog]);
    }
}
