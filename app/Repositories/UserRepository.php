<?php
namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends ResourceRepository
{
  public function __construct(User $user)
  {
      $this->model = $user;
  }

}
