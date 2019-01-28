<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'student_training';

    protected $fillable = [
      'student_id',
      'training_id',
      'dateOfRegistration',
      'semester',
      'cycle',
    ];
}
