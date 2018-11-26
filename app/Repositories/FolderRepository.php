<?php
namespace App\Repositories;

use App\Models\Folder;
use App\Management\PictureManagementInterface;
use Illuminate\Support\Facades\DB;

class FolderRepository extends ResourceRepository
{
  protected $pictureManager;

  public function __construct(Folder $folder, PictureManagementInterface $pictureManager)
	{
		$this->model = $folder;
    $this->pictureManager = $pictureManager;
	}

  private function queryWithStudent()
	{
		return $this->model->with('student')
		->oldest('folders.created_at');
	}

	public function getWithStudentPaginate($n)
	{
		return $this->queryWithStudent()->paginate($n);
	}

  public function update($id, array $files)
	{
    $folder = $this->getById($id);

    $studentHavenFolder = DB::table('students')->where('id', $folder->student_id)->first();
    $student = [
      'id' => $studentHavenFolder->id,
      'lastName' => $studentHavenFolder->lastName,
      'firstName' => $studentHavenFolder->firstName,
    ];

    $fields = array_keys($files);
    $imagesToDelete = [];
    foreach ($fields as $field => $file) {
      if ($file !== null) {
        $imagesToDelete = array_merge($imagesToDelete, [$field => $folder->$field]);
      }
    }

    if (($paths = $this->pictureManager->update($student, $imagesToDelete, $files))!==false)
		  $folder->update($paths);
	}

  public function updateByStaff($id, $rank, $action)
  {
    $folder = $this->model->getById($id);
    if ($action === 'validate') {
      switch ($rank) {
        case 2:
          $folder->validateByStaffLevelTwo = true;
          $folder->save();
          return $folder;
        break;

        case 3:
          $folder->validateByStaffLevelThree = true;
          $folder->save();
          return $folder;
        break;
      }
    }

    elseif ($action === 'reject') {
      switch ($rank) {
        case 2:
          $folder->validateByStaffLevelTwo = false;
          $folder->save();
          return $folder;
        break;

        case 3:
          $folder->validateByStaffLevelThree = false;
          $folder->save();
          return $folder;
        break;
      }
    }
  }

}
