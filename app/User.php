<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
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
    public function isAdmin()
	{
		return $this->is_admin; // this looks for an is_admin column in your users table
	}

     public function getIdNameAttribut(){
         $user= Users::while('Newcompanies')->find(Auth::user()->id);
         return $users->Newcompanies->idname;

       }
         public function getIdUserAttribut(){
             $user= Users::while('Memberuser')->find(Auth::user()->id);
             return $users->Memberuser->iduser;

           }
}
