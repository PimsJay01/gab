<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtInfosTable extends Migration {

	public function up()
	{
		Schema::create('court_infos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('slug')->unique()->default('');
			$table->integer('court_type_id')->unsigned();
			$table->integer('address_id')->unsigned();

            $table->foreign('court_type_id')
                  ->references('id')
                  ->on('court_types')
				  ->onDelete('no action')
				  ->onUpdate('no action');

            $table->foreign('address_id')
                  ->references('id')
                  ->on('addresses')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
        Schema::table('court_infos', function(Blueprint $table) {
            $table->dropForeign(['court_type_id']);
		});
        Schema::table('court_infos', function(Blueprint $table) {
            $table->dropForeign(['address_id']);
		});
		Schema::drop('court_infos');
	}
}
