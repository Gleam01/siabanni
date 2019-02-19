<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
  protected $fillable = [
    'birthCertificate', 'nationalityCertificate', 'attestation', 'bulletin',
    'NICReference', 'picture', 'validateByStaffLevelOne',
    'validateByStaffLevel', 'student_id',
  ];

  public function student()
  {
    return $this->belongsTo('App\Models\Student');
  }
}
