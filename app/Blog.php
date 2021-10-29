<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'Title','Body','Date','Image','User_id','Poster_Name', 
    ];
}
