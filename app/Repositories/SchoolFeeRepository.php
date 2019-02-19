<?php
namespace App\Repositories;

use App\Models\SchoolFee;

class SchoolFeeRepository extends ResourceRepository
{
    public function __construct(SchoolFee $schoolFee)
    {
        $this->model = $schoolFee;
    }
}
