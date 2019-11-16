<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ngasal_Banget extends Model
{
    // Cara menghubungkan model ini tidak mengikuti konvensional laravel.
    // Jadi agar dapat bisa terhubung maka harus membuat assignment.
    protected $table = 'ngasal_banget';
    public $timestamps = false;
}
