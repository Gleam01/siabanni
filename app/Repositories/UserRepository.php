<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends ResourceRepository
{
  public function __construct(User $user)
  {
      $this->model = $user;
  }

  public function getUserPlanSlug($id) {
      $student_id = DB::table('students')->where('user_id', $id)->value('id');
      $training_id = DB::table('student_training')->where('student_id', $student_id)->value('training_id');
      return DB::table('plans')->where('training_id', $training_id)->value('slug');
  }

}
