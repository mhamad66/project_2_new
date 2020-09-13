<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use App\Role;
use App\Post;
class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
// start has image user
    public function hasImageUser()
    {
        if (preg_match('/image_user/', $this->profile->image_user, $match)) {
            return true;
        } else {

            return false;
        }
    }
// start has image_identification_paper
public function hasImageIdentificationPaper()
    {
        if (preg_match('/image_identification_paper/', $this->profile->image_identification_paper, $match)) {
            return true;
        } else {

            return false;
        }
    }
    public function getImageUser()
    {
        return $this->profile->image_user;
    }
    public function image_identification_paper()
    {
        return $this->profile->image_identification_paper;
    }
    public function getAvatar()
    {
        $hash =  md5(strtolower(trim($this->attributes['email'])));

        return "https://gravatar.com/avatar/$hash";
    }
    public function profile(){
        return $this->hasOne(profile::class);
    }
    public  function  Roles(){

        return $this->belongsToMany('App\Role','role_user');
    }


    public function Course(){

        return $this->hasMany('App\Course');
    }


}
