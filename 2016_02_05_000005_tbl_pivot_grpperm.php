<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblPivotGrpperm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups_permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("permission_id")->unsigned()->nullable();
			$table->foreign("permission_id")->references("id")->on("permissions")->onDelete("cascade");
			$table->integer("group_id")->unsigned()->nullable();
			$table->foreign("group_id")->references("id")->on("groups")->onDelete("cascade");
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
		Schema::drop('groups_permissions');
	}

}
