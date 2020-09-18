<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $fillable = [

        'id', 'title', 'description', 'image', 'place','Date'
    ];

}
