<?php
namespace App\Repositories;

abstract class ResourceRepository
{

  protected $model;

  public function getPaginate($n)
	{
		return $this->model->paginate($n);
	}

	public function store(array $inputs)
	{
		return $this->model->create($inputs);
	}

	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	public function update($id, array $inputs)
	{
		$this->getById($id)->update($inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

  public function updateRedirectRoute($request, $admin)
  {
      return $request->user()->admin === 1 ? $admin : 'dashboard';
  }

  public function getStudentIDByUserID($id) {
      return DB::table('students')->where('user_id', $id)->value('id');
  }

}
