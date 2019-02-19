<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  protected $fillable = [
    'code', 'name', 'description', 'school_id'
  ];

  public function options()
  {
    return $this->hasMany('App\Models\Option');
  }

  public function school()
  {
    return $this->belongsTo('App\Models\School');
  }

  public function students()
  {
    return $this->belongsToMany('App\Models\Student');
  }

    public function plans()
    {
        return $this->hasMany('App\Models\Plan');
    }
}
