<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'image_user', 'image_identification_paper', 'facebook','phone_number','address'
     ];
 
     public function user()
     {
         return $this->belongsTo(user::class);
     }
}
