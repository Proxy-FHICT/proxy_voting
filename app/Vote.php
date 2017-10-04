<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Qualification;

class Vote extends Model {

	protected $table = 'Votes';
	public $timestamps = true;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	public $fillable=['t_id','s_nr','q_id'];

	public function getTeacher()
	{
		return $this->hasOne('Teacher');
	}

	public function getStudent()
	{
		return $this->hasOne('Student');
	}

	public function getQualification()
	{
		return $this->hasOne('App\Qualification');
	}

}