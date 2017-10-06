<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtsTable extends Migration {

	public function up()
	{
		Schema::create('courts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('court_info_id')->unsigned();
			$table->integer('season_id')->unsigned();

            $table->foreign('court_info_id')
                  ->references('id')
                  ->on('court_infos')
                  ->onDelete('no action')
                  ->onUpdate('no action');

            $table->foreign('season_id')
                  ->references('id')
                  ->on('seasons')
            	  ->onDelete('no action')
            	  ->onUpdate('no action');

  			$table->timestamps();
  			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::table('courts', function(Blueprint $table) {
			$table->dropForeign('courts_court_info_id_foreign');
		});
		Schema::table('courts', function(Blueprint $table) {
			$table->dropForeign('courts_season_id_foreign');
		});
		Schema::drop('courts');
	}
}
