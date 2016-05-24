<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPivotCousub extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses_subjects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("course_id")->unsigned()->nullable();
			$table->foreign("course_id")->references("id")->on("courses")->onDelete("cascade");
			$table->integer("subject_id")->unsigned()->nullable();
			$table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
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
		Schema::drop('courses_subjects');
	}

}
