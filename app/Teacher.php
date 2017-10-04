<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

	protected $table = 'Teachers';
	public $timestamps = true;

	public function getVotes()
	{
		return $this->hasMany('Vote', 't_id');
	}

}