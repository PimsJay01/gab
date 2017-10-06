<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtTypesTable extends Migration {

	public function up()
	{
		Schema::create('court_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
		});
	}

	public function down()
	{
		Schema::drop('court_types');
	}
}
