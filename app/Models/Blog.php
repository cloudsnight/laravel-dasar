<?php

// Bilamana Model ini berada dibawah folder App\Models
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Cara disini menggunakan metode konvensional dari laravel, yang mana 
    // Bilamana nama class-nya singular maka otomatis nama table-nya plural.
    // ex: class Blog extends Model {} ; maka table-nya adalah Blogs.

    // Bila tidak menggunakan created_at dan updated_at maka alangkah baiknya
    // menjadikan nilai $timestamps dengan false untuk me-non-aktifkannya.
    public $timestamps = false;
}
