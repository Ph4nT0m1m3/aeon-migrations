<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPersons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("identification_code")->nullable()->unique();
			$table->integer("course_id")->unsigned()->nullable();
			$table->foreign("course_id")->references("id")->on("courses")->onDelete("set null");
			$table->string("firstname", 15);
			$table->string("middlename", 15)->nullable();
			$table->string("lastname", 15);
			$table->string("gender", 10);
			$table->string("email", 40)->unique();
			$table->string("photo")->default("default.png")->nullable();		
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
		Schema::drop('persons');
	}

}
