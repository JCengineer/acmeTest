<?php 

namespace App\Repositories;

use App\Contracts\RepositoryInterface;
use App\Contracts\ModelInterface;
use App\Models\Form;

class FormRepository implements RepositoryInterface
{
	private $formModel;

	public function __construct(Form $model)
	{
		$this->formModel = $model;
	}

	public function create($attributes)
	{
		return $this->formModel::create($attributes);
	}

	public function findOrFail(int $id)
	{
		return $this->formModel::findOrFail($id);
	}

}
