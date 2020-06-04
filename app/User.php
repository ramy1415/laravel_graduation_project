<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','phone','image','role'
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


    public function designs()
    {
        return $this->hasMany(Design::class,'designer_id');
    }

    public function company_designs()
    {
        return $this->hasMany(CompanyDesign::class,'company_id');
    }
    
    public function designer_rates()
    {
        return $this->hasMany(DesignerRate::class,'designer_id');
    }

    public function my_likes()
    {
        return $this->hasMany(DesignerRate::class,'liker_id');
    }
    
    public function profile()
    {
        return $this->hasOne(Profile::class,'user_id');
    }
    

    

}
