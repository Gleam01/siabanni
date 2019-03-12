<?php
namespace App\Management;
use App\Management\PictureManagementInterface;

class PictureManagement implements PictureManagementInterface
{
  static $picture_upload_count = 0;

  public function generateStudentFolderName(array $student)
  {
    $folder = config('folders.path');
    $firstName = strpos($student['firstName'], ' ')? ucfirst(substr($student['firstName'], 0, strpos($student['firstName'], ' '))) : ucfirst($student['firstName']);
    $folder .=$firstName;
    $lastName = strpos($student['lastName'], ' ')? ucfirst(substr($student['lastName'], 0, strpos($student['lastName'], ' '))) : ucfirst($student['lastName']);
    $folder .=$lastName;
    $folder .= $student['id'];

    return $folder;
  }

  public function setFileNameByInputName($inputName, $extension)
  {
    $fileName = '';
    switch ($inputName) {
      case 'birthCertificate':
        $fileName .= 'birthCertificate.'.$extension;
      break;
      case 'nationalityCertificate':
        $fileName .= 'nationalityCertificate.'.$extension;
      break;
      case 'attestation':
        $fileName .= 'attestation.'.$extension;
      break;
      case 'bulletin':
        $fileName .= 'bulletin.'.$extension;
      break;
      case 'NICReference':
        $fileName .= 'NICReference.'.$extension;
      break;
      case 'picture':
        $fileName .= 'picture.'.$extension;
      break;
    }

    return $fileName;
  }

  public function save(array $student, array $images)
  {
    $folder = $this->generateStudentFolderName($student);

    $paths = array();
    foreach ($images as $key => $image) {
      if(!$image->isValid()) return false;

      $extension = $image->getClientOriginalExtension();
      $name = $this->setFileNameByInputName($key, $extension);

      if ($image->move($folder, $name))
        $paths = array_merge($paths, [$key => $folder.'/'.$name]);

      else  return false;
    }

    return $paths;
  }

  public function update(array $student, array $imagesToDelete, array $imagesToSave)
  {
    foreach ($imagesToDelete as $image) {
      if ($image !== null && file_exists($image)) unlink($image);
    }
    return $this->save($student, $imagesToSave);
  }

  private function generateRandomName()
  {
    self::$picture_upload_count++;
    return str_random(31).self::$picture_upload_count;
  }

  public function savePicture($image, $folder)
  {
    
    if(!$image->isValid())
      return false;

    $extension = $image->getClientOriginalExtension();
    $name = $this->generateRandomName().'.'.$extension;

    if ($image->move($folder, $name))
      return $folder.''.$name;

    else
      return false;
  }

  public function updatePicture($path, $image, $folder)
  {
    if ($path !== null && file_exists($path)) unlink($path);
    return $this->savePicture($image, $folder);
  }
}
