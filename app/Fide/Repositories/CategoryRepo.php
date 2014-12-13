<?php

namespace Fide\Repositories;

use Fide\Entities\Category;

class CategoryRepo{

	public function find($id){
		return Category::find($id);
	}
}