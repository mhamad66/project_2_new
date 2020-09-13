<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model

{   protected $table = 'lectures';
    protected $primaryKey = 'id';


    protected $fillable = [

        'id','title' , 'link' ,'file','view_count','course_id'
    ];



    Public function Course(){

        return $this->belongsTo('App\Course','course_id');
    }
}
