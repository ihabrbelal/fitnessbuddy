<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
	// Attributes that are mass-assingable

   protected $fillable = ['name'];

   public function user(){
   	return $this->belongsTo(User:: class);
   }
   public function foods(){

   	return $this->hasMany(Food:: class);
   }

}
