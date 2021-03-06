<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comments", function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->integer("schedule_id")->unsigned()->nullable();
            $table->foreign("schedule_id")->references("id")->on("schedules")->onDelete("cascade");
            $table->text("comment");
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
        Schema::drop("comments");
    }
}
