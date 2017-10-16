<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeasonsTable extends Migration {

	public function up()
	{
		Schema::create('seasons', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
			$table->date('start_at');
			$table->date('end_at');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('seasons');
	}
}
