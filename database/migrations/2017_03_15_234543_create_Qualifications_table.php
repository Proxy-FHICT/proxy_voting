<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQualificationsTable extends Migration {

	public function up()
	{
		Schema::create('Qualifications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 64);
			$table->string('description', 256);
		});
	}

	public function down()
	{
		Schema::drop('Qualifications');
	}
}