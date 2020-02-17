<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  public function team()
    {
    return $this->belongsTo('App\Team');
    }

    public function player()
    {
    return $this->belongsTo('App\Player');
    }  
}
