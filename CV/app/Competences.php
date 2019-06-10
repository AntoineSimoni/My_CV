<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competences extends Model
{
    //
    protected $fillable = [
        'text','created_at','updated_at'
    ];

    protected $table = "competences";
}
