<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
        'Name','Email','Contact_No','Subject','Message','Status', 
    ];
}
