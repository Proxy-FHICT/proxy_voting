<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

	public function up()
	{
		Schema::create('Teachers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 64);
			$table->string('link',64);
			$table->string('picture',64);
		});
	}

	public function down()
	{
		Schema::drop('Teachers');
	}
}