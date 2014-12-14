<?php

namespace Fide\Repositories;

abstract class BaseRepo{

	protected $model;

	public function __construct(){
		$this->model = $this->getModel();
	}

	abstract public function getModel();

	public function find($id){
		// return Category::find($id);
		return $this->model->find($id);
	}
	
}