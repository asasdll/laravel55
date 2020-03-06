<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Auth;

class Memberuser extends Model
{
  protected $fillable = [
      'idname','code','firstname', 'lastname','nickname','age','date','tel',
      'tel2','telname2','tel3','telname3','address','city','postalcode',
      'status2','image'
  ];
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

public function getIdNameAttribut(){
    $user= Users::while('Memberuser')->find(Auth::user()->id);
    return $users->Memberuser->iduser;

  }

}
