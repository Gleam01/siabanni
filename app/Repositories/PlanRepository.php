<?php
namespace App\Repositories;

use App\Models\Plan;

class PlanRepository extends ResourceRepository
{
    public function __construct(Plan $plan)
    {
        $this->model = $plan;
    }

    private function queryWithTraining()
    {
        return $this->model->with(['training'])
            ->latest('plans.created_at');
    }

    public function getWithTrainingPaginate($n)
    {
        return $this->queryWithTraining()->paginate($n);
    }
}
