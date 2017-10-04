<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model {

	protected $table = 'Qualifications';
	public $timestamps = true;

	public function getVotes()
	{
		return $this->hasMany('App\Vote', 'q_id');
	}
}