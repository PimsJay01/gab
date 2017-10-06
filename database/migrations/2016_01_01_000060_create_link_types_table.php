<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinkTypesTable extends Migration {

	public function up()
	{
		Schema::create('link_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
		});
	}

	public function down()
	{
		Schema::drop('link_types');
	}
}
