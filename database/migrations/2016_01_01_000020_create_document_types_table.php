<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentTypesTable extends Migration {

	public function up()
	{
		Schema::create('document_types', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 50);
		});
	}

	public function down()
	{
		Schema::drop('document_types');
	}
}
