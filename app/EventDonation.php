<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventDonation extends Model
{
    protected $fillable = [
        'User_id', 'User_Name', 'User_Email', 'User_Contact', 'Event_id', 'Event_Title', 'Card_Number', 'Payment',
    ];
}
