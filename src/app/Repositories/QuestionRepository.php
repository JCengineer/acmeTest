<?php 

namespace App\Repositories;

use App\Contracts\RepositoryInterface;
use App\Contracts\ModelInterface;
use App\Models\Question;

class QuestionRepository implements RepositoryInterface
{
	private $questionModel;

	public function __construct(Question $model)
	{
		$this->questionModel = $model;
	}

	public function create($attributes)
	{
		return $this->questionModel::create($attributes);
	}

	public function findOrFail(int $id)
	{
		return $this->questionModel->findOrFail($id);
	}
}