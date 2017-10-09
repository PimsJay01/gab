<?php

use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentsTableSeeder extends Seeder {

	public function run()
	{
		Document::create(array(
				'title' => 'Nouvel arbitre',
				'path' => 'uploads/Documents/Inscription_arbitre.pdf',
				'document_type_id' => 1
			));

		Document::create(array(
				'title' => 'Nouvelle équipe',
				'path' => 'uploads/Documents/Inscription_equipe.pdf',
				'document_type_id' => 1
			));

		Document::create(array(
				'title' => 'Directives de jeu',
				'path' => 'uploads/Documents/Directives_de_jeu.pdf',
				'document_type_id' => 2
			));

		Document::create(array(
				'title' => 'Status',
				'path' => 'uploads/Documents/Status_GAB.pdf',
				'document_type_id' => 2
			));

		Document::create(array(
				'title' => 'Demande de licence',
				'path' => 'uploads/Documents/Demande_de_licence.pdf',
				'document_type_id' => 3
			));
	}
}
