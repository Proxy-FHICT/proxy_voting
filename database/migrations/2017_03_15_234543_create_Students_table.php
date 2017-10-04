<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	public function up()
	{
		Schema::create('Students', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('studentEmail', 64);
			$table->integer('studentNr')->unique();
		});
	}

	public function down()
	{
		Schema::drop('Students');
	}
}