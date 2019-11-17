<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    // soft deletes
    use SoftDeletes;

    protected $date = ['deleted_at'];

    // guarded merupakan mass assignment mode blacklist
    // protected $guarded = [];

    // fillable merupakan mass assignment mode whitelist
    protected $fillable = ['title', 'description'];

    // disable timestamps
    // public $timestamps = false;
}
