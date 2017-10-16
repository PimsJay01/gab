<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtSchedulesTable extends Migration {

	public function up()
	{
		Schema::create('court_schedules', function(Blueprint $table) {
			$table->increments('id');
			$table->tinyInteger('day')->unsigned();
			$table->time('time');
			$table->integer('court_id')->unsigned();

            $table->foreign('court_id')
                  ->references('id')
                  ->on('courts')
				  ->onDelete('no action')
				  ->onUpdate('no action');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
        Schema::table('court_schedules', function(Blueprint $table) {
            $table->dropForeign(['court_id']);
        });
		Schema::drop('court_schedules');
	}
}
