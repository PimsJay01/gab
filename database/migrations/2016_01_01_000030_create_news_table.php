<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	public function up()
	{
		Schema::create('news', function(Blueprint $table) {
			$table->increments('id');
			$table->string('text');
			$table->enum('type', ['agenda', 'calendrier', 'divers', 'people', 'reglement', 'sanctions']);

            $table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('news');
	}
}
