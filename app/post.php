<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use APP\User;  
class Post extends Model
{
    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body','user_id','image'];
   
    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }


    public function posts()
    {
        return $this->belongsTo(User::class);
    }
}
