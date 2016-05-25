<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblSubjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subjects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("subject", 20);
			$table->string("description", 100)->nullable();
			$table->integer("prerequisite")->unsigned()->nullable();
			$table->foreign("prerequisite")->references("id")->on("subjects")->onDelete("cascade");
			$table->integer("units");
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
		Schema::drop('subjects');
	}

}
