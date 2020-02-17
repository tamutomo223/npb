<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  public function songs()
  {
   return $this->hasMany('App\Songs');
  }
}
