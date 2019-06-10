<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    //
    protected $fillable = [
        'text','annee','created_at','updated_at'
    ];

    protected $table = "experiences";
}
