<?php

namespace Fide\Entities;

class Category extends \Eloquent {
	protected $fillable = [];

	public function candidates(){

		return $this->hasMany('Fide\Entities\Candidate');
	}

	public function getPaginateCandidatesAttribute(){

		return Candidate::where('category_id', $this->id)->paginate();
	}
}