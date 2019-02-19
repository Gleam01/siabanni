<?php
namespace App\Management;
use App\Management\PictureManagementInterface;

class PictureManagement implements PictureManagementInterface
{
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
      if ($image !== null && file_exists($image)) unlik($image);
    }

    return $this->save($student, $imagesToSave);
  }

}
