<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'courses';
    protected $primaryKey = 'id';


    protected $fillable =[
        'id' ,
        'title' ,
        'name',
        'description' ,
        'image'   ,
        'user_id',
        'category_id',
        'view_count',
        'year'
    ];

    Public function Category(){

        return $this->belongsTo('App\Category');
    }
    Public function User(){

        return $this->belongsTo('App\User');
    }

    public function Lecture(){

        return $this->hasMany('App\Lecture',['category_id','user_id']);
    }


}
