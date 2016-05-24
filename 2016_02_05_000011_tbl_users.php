<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("person_id")->unsigned()->nullable()->unique();
			$table->foreign("person_id")->references("id")->on("persons")->onDelete("cascade");
			$table->integer("group_id")->unsigned()->nullable();
			$table->foreign("group_id")->references("id")->on("groups")->onDelete("cascade");
			$table->string("username", 15)->unique();
			$table->string("password");
			$table->dateTime("last_active");
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
