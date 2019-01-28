<?php
namespace App\Repositories;

use App\Models\Staff;

class StaffRepository extends ResourceRepository
{
  public function __construct(Staff $staff)
	{
		$this->model = $staff;
	}

}
