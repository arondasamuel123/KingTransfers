<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transfer extends Model
{
    protected $fillable = [
        'from', 'to', 'date', 'return', 'passengers','luggage'
    ];

  
    public function user(){
    	return $this->belongsTo(User::class);

    }
    public function flights() {
    	return $this->hasMany(Flight::class)->latest()->limit(1);
    }

    
}
