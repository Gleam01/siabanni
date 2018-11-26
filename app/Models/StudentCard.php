<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentCard extends Model
{

  public function student()
  {
    return $this->belongsTo('App\Models\Student');
  }

}
