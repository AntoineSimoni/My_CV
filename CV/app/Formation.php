<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    protected $fillable = [
        'text','created_at','updated_at'
    ];

    protected $table = "formation";
}
