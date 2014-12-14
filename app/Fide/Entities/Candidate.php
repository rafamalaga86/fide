<?php 

namespace Fide\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];
	protected $perPage = 3;

	public function user(){

		return $this->hasOne('Fide\Entities\User', 'id', 'id');
	}

	public function category(){

		return $this->belongsTo('Fide\Entities\Category');
	}

	public function getJobTypeTitleAttribute(){
		return \Lang::get('utils.job_types.' . $this->job_type);
	}
}