<?php
namespace App\Repositories;

use App\Models\Training;
use Illuminate\Support\Facades\DB;

class TrainingRepository extends ResourceRepository
{
  public function __construct(Training $training)
	{
		$this->model = $training;
	}

  public function getTrainings()
  {
      return $this->model->all();
  }

  public function getTrainingByUserId(int $id)
  {
    return $this->getById(DB::table('student_training')->where('student_id', DB::table('students')->where('user_id', $id)->value('id'))->value('training_id'));
  }
}
