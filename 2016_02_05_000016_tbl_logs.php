<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("user_id")->unsigned()->nullable()->unique();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->string("alert_type", 10);
            $table->string("icon_type", 10);
            $table->string("table", 25);
            $table->integer("table_id");
            $table->string("action", 50);
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
		Schema::drop('logs');
	}

}
