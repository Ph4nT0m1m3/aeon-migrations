<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblScheduleElement extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elements', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("class_id")->unsigned()->nullable();
			$table->foreign("class_id")->references("id")->on("classes")->onDelete("cascade");
			$table->integer("day_id")->unsigned()->nullable();
			$table->foreign("day_id")->references("id")->on("days")->onDelete("cascade");
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
		Schema::drop('elements');
	}

}
