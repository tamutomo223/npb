<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  public function songs()
  {
   return $this->hasMany('App\Songs');
  }
}
