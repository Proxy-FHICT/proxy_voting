<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Votes', function(Blueprint $table) {
			$table->foreign('t_id')->references('id')->on('Teachers')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('Votes', function(Blueprint $table) {
			$table->foreign('q_id')->references('id')->on('Qualifications')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('Votes', function(Blueprint $table) {
			$table->dropForeign('Votes_t_id_foreign');
		});
		Schema::table('Votes', function(Blueprint $table) {
			$table->dropForeign('Votes_s_id_foreign');
		});
		Schema::table('Votes', function(Blueprint $table) {
			$table->dropForeign('Votes_q_id_foreign');
		});
	}
}