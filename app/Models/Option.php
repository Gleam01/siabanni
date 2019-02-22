<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  protected $fillable = [
    'code', 'name', 'description', 'avatar', 'training_id'
  ];

  public function training()
  {
    return $this->belongsTo('App\Models\Training');
  }
}
