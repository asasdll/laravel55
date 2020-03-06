<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  protected $fillable = [
      'newcode','idchief','fname','lname','niname','position'
  ];
  protected $hidden = [
      'password', 'remember_token',
  ];
}
