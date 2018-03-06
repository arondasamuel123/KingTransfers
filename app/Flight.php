<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
   		'airport', 'flightno', 'airname', 'arrivaltime','phoneno', 'requests','payment'
   ];

   public function transfer(){
    	return $this->belongsTo(Transfer::class);

    }

    

}
