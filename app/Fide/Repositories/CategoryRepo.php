<?php

namespace Fide\Repositories;

use Fide\Entities\Candidate;
use Fide\Entities\Category;

class CategoryRepo extends BaseRepo{
	
	public function getModel(){
		return new Category;
	}
}