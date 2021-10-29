<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = [
        'User_id', 'User_Name', 'User_Email', 'Event_id', 'Event_Title', 'Card_Number', 'Payment',
    ];
}
