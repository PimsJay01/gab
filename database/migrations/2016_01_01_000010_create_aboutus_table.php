<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutusTable extends Migration {

	public function up()
	{
		Schema::create('aboutus', function(Blueprint $table) {
			$table->increments('id');
			$table->text('text');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('aboutus');
	}
}
