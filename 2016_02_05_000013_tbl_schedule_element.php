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
			$table->integer("schedule_id")->unsigned()->nullable();
			$table->foreign("schedule_id")->references("id")->on("schedules")->onDelete("cascade");
			$table->integer("assignee_id")->unsigned()->nullable();
			$table->foreign("assignee_id")->references("id")->on("assignees")->onDelete("cascade");
			$table->integer("course_id")->unsigned()->nullable();
			$table->foreign("course_id")->references("id")->on("courses")->onDelete("cascade");
			$table->integer("subject_id")->unsigned()->nullable();
			$table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
			$table->integer("room_id")->unsigned()->nullable();
			$table->foreign("room_id")->references("id")->on("rooms")->onDelete("cascade");
			$table->integer("day_id")->unsigned()->nullable();
			$table->foreign("day_id")->references("id")->on("days")->onDelete("cascade");
			$table->time("time_in");
			$table->time("time_out");
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
		Schema::drop('elements');
	}

}
