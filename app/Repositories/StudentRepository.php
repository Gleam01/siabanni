<?php
namespace App\Repositories;

use App\Models\Student;

class StudentRepository extends ResourceRepository
{
  public function __construct(Student $student)
	{
		$this->model = $student;
	}

  private function queryWithUserFolderAndTrainings()
	{
		return $this->model->with(['user', 'folder', 'trainings'])
		->oldest('students.created_at');
	}

	public function getWithUserFolderAndTrainingsPaginate($n)
	{
		return $this->queryWithUserFolderAndTrainings()->paginate($n);
	}


  public function destroy($id)
  {
    $this->getById($id)->trainings()->detach()->delete();
  }

  public function getStudentByUserId($id)
  {
    return $this->model->where('user_id', $id)->first();
  }
}
