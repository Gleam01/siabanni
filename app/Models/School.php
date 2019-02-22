<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
  protected $fillable = [
    'name', 'description', 'contact', 'avatar'
  ];

  public function staffs()
  {
    return $this->hasMany('App\Models\Staff');
  }

  public function trainings()
  {
    return $this->hasMany('App\Models\Training');
  }

}
