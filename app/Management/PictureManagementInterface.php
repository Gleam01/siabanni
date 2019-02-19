<?php
  namespace App\Management;

  interface PictureManagementInterface
  {
    public function generateStudentFolderName(array $student);

    public function setFileNameByInputName($inputName, $extension);

    public function save(array $student, array $images);

    public function update(array $student, array $imagesToDelete, array $imagesToSave);
  }
