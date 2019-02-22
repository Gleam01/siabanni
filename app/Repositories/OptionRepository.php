<?php
namespace App\Repositories;

use App\Models\Option;
use Illuminate\Support\Facades\DB;

class OptionRepository extends ResourceRepository
{
  public function __construct(Option $option)
  {
      $this->model = $option;
  }

}
