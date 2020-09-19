<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marks';
    protected $primaryKey = 'id';
    protected $fillable = [

        'id', 'title', 'semester', 'link', 'course_id'
    ];

    public function Course()
    {
        return $this->belongsTo('App\Course', 'course_id');

    }
}
