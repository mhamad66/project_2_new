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


    public function hasImage()
    {
        if (preg_match('/images/', $this->post->image, $match)) {
            return true;
        } else {

            return false;
        }
    }
        public function getImage()
        {
            return $this->post->image;
        }
        
        public function getAvatar()
        {
            $hash =  md5(strtolower(trim($this->attributes['email'])));
    
            return "https://gravatar.com/avatar/$hash";
        }
    }


