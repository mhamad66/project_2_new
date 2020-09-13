<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name' , 'description'
    ];

    public function Course(){

        return $this->hasMany('App\Course');
    }


}
