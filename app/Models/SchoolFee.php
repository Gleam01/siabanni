<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolFee extends Model
{
  protected $fillable = [
    'montant', 'type', 'student_id'
  ];

  public function student()
  {
    return $this->belongsTo('App\Models\Student');
  }
}
