<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    protected $fillable = [
      'lastName', 'firstName', 'profession', 'phone', 'student_id'
    ];

    public function student()
    {
      return $this->belongsTo('App\Models\Student');
    }

}
