<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
   protected $fillable = [
       'mechanic_id','client_id','date'
   ];

   public function mechanic(){
       return $this->belongsTo(User::class,'mechanic_id');
   }

   public function client(){
    return $this->belongsTo(User::class,'client_id');

   }

   public function user(){
       return $this->belongsTo(User::class);
   }

}
