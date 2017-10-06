<?php

use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypesTableSeeder extends Seeder {

	public function run()
	{
		// Subscription
		DocumentType::create(array(
			'title' => 'Inscription'
		));

		// Rules
		DocumentType::create(array(
			'title' => 'Règlement'
		));

		// Others
		DocumentType::create(array(
			'title' => 'Autres'
		));
	}
}
