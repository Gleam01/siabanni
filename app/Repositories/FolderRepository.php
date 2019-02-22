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

  private function checkFolderTwoValidations(Folder $folder)
  {
    return $folder->validateByStaffLevelOne == 1 && $folder->validateByStaffLevelTwo == 1;
  }
  public function updateByStaff($id, $rank, $action)
  {
    $folder = $this->getById($id);
    if ($action === 'accept') {
      switch ($rank) {
        case 1:
          $folder->validateByStaffLevelOne = 1;
          $folder->save();
          return ['folder' => $folder, 'validateByAllStaff' => $this->checkFolderTwoValidations($folder)];
        break;

        case 2:
          $folder->validateByStaffLevelTwo = 1;
          $folder->save();
          return ['folder' => $folder, 'validateByAllStaff' => $this->checkFolderTwoValidations($folder)];
        break;
      }
    }

    elseif ($action === 'reject') {
      switch ($rank) {
        case 1:
          $folder->validateByStaffLevelOne = -1;
          $folder->save();
          return ['folder' => $folder, 'validateByAllStaff' => $this->checkFolderTwoValidations($folder)];
        break;

        case 2:
          $folder->validateByStaffLevelTwo = -1;
          $folder->save();
          return ['folder' => $folder, 'validateByAllStaff' => $this->checkFolderTwoValidations($folder)];
        break;
      }
    }
  }

    public function getFolderByUserId(int $id)
    {
        return $this->model->where(
            'student_id',
            DB::table('students')->where('user_id', $id)->first()->id
    )->first();

    }

    public function getStudentByFolderId(int $id)
    {
      return App\Models\Student::where('id', $this->getById($id)->student_id)->first();
    }

    public function getUserByFolderId(int $id)
    {
      return App\Models\User::where('id', $this->getStudentByFolderId($id)->user_id)->first();
    }

}
