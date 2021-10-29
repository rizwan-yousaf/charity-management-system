<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'Title','Description','Fund','Status','Image','Proof','User_id','User_Name','User_Email','User_Contact','Category_id','raised_fund', 
    ];

    public function category()
    {
    	return $this->belongsTo(Categories::class,'Category_id','id');
    }

	public function userfname()
    {
    	return $this->belongsTo(User::class,'User_id','id');
    }    
}
