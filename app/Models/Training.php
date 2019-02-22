<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
  protected $fillable = [
    'code', 'name', 'description', 'fees', 'admissionFees', 'avatar', 'school_id'
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
}
