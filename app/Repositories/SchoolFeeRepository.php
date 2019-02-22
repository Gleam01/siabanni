<?php
namespace App\Repositories;

use App\Models\SchoolFee;
use Illuminate\Support\Facades\DB;

class SchoolFeeRepository extends ResourceRepository
{
    public function __construct(SchoolFee $schoolFee)
    {
        $this->model = $schoolFee;
    }
}
