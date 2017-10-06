<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration {

	public function up()
	{
		Schema::create('links', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('link_type_id')->unsigned();
			$table->string('title', 50);
			$table->string('img');
			$table->string('url');

            $table->foreign('link_type_id')
                  ->references('id')
                  ->on('link_types')
                  ->onDelete('no action')
                  ->onUpdate('no action');

  			$table->timestamps();
  			$table->softDeletes();
		});
	}

	public function down()
	{
        Schema::table('links', function(Blueprint $table) {
			$table->dropForeign(['link_type_id']);
		});
		Schema::drop('links');
	}
}
