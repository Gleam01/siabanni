<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = [
    'firstName', 'lastName', 'birthday', 'placeOfBirth', 'phone',
    'sex', 'country', 'province', 'city', 'user_id'
  ];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function folder()
  {
    return $this->hasOne('App\Models\Folder');
  }

  public function trainings()
  {
    return $this->belongsToMany('App\Models\Training');
  }

  public function schoolFees()
  {
    return $this->hasMany('App\Models\schoolFee');
  }

  public function parents()
  {
    return $this->hasMany('App\Models\Parent');
  }

}
