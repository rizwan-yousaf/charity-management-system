<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralDonation extends Model
{
    protected $fillable = [
        'User_id', 'User_Name', 'User_Email', 'User_Contact', 'Purpose', 'Card_Number', 'Payment',
    ];
}
