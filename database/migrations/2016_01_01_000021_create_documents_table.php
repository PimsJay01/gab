<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('documents', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('document_type_id')->unsigned();
			$table->string('title', 50);
			$table->enum('icon', ['text', 'pdf', 'word', 'excel'])->default('pdf');
			$table->string('path');

            $table->foreign('document_type_id')
                  ->references('id')
                  ->on('document_types')
                  ->onDelete('no action')
                  ->onUpdate('no action');

  			$table->timestamps();
  			$table->softDeletes();
		});
	}

	public function down()
	{
        Schema::table('documents', function(Blueprint $table) {
			$table->dropForeign(['document_type_id']);
		});
		Schema::drop('documents');
	}
}
