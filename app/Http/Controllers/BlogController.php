<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Facades\DB Penting untuk pemanggilan DB::table atau semacamnya //
use Illuminate\Support\Facades\DB;

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
        
        $users = DB::table('users')->get();
        $unescaped = '<script>alert("ini adalah alert dari unescaped !");</script>';
        return view('blog/single', ['nilai' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
    }
}
