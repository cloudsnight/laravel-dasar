<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // guarded merupakan mass assignment mode blacklist
    protected $guarded = [];

    // fillable merupakan mass assignment mode whitelist
    // protected $fillable = ['title', 'description'];

    // disable timestamps
    // public $timestamps = false;
}
