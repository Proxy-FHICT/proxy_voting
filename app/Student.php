<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $table = 'Students';
	public $timestamps = true;

	public function getVotes()
	{
		return $this->hasMany('Vote', 's_id');
	}

}