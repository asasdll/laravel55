<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
  protected $fillable = [
      'user_id','time_in','time_out'
  ];
  protected $hidden = [
      'password', 'remember_token',
  ];

}
