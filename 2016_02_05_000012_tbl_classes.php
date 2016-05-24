<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblClasses extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("assignee_id")->unsigned()->nullable();
			$table->foreign("assignee_id")->references("id")->on("assignees")->onDelete("cascade");
			$table->integer("course_id")->unsigned()->nullable();
			$table->foreign("course_id")->references("id")->on("courses")->onDelete("cascade");
			$table->integer("subject_id")->unsigned()->nullable();
			$table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
			$table->integer("room_id")->unsigned()->nullable();
			$table->foreign("room_id")->references("id")->on("rooms")->onDelete("cascade");
			$table->text("remarks")->nullable();
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
		Schema::drop('classes');
	}

}
