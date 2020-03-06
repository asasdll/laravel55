<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Newcompanies extends Model
{


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'idname', 'companyname','firstname','lastname','tel','tel2','address','city','postalcode','image','hashedRandomPassword'
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
  public function getIdNameAttribut(){
      $user= Users::while('Newcompanies')->find(Auth::user()->id);
      return $users->Newcompanies->iduser;

    }


}
