<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtInfosTable extends Migration {

	public function up()
	{
		Schema::create('court_infos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('court_type_id')->unsigned();
			$table->integer('address_id')->unsigned();
			$table->string('name', 50);
			$table->string('slug', 50);

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
            $table->dropForeign(['court_type_id', 'address_id']);
		});
		Schema::drop('court_infos');
	}
}
