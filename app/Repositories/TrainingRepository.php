<?php
namespace App\Repositories;

use App\Models\Training;

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

}
