<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblIncharges extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asssignees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("person_id")->unsigned()->nullable();
			$table->foreign("person_id")->references("id")->on("persons")->onDelete("set null");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assignees');
	}

}
