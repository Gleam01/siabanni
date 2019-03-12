<?php
namespace App\Repositories;

use App\Models\School;
use Illuminate\Support\Facades\DB;

class SchoolRepository extends ResourceRepository
{
  public function __construct(School $school)
  {
    $this->model = $school;
  }
}
