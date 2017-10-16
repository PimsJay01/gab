<?php

use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentsTableSeeder extends Seeder {

	public function run()
	{
		Document::create(array(
				'title' => 'Nouvel arbitre',
				'slug' => 'nouvel-arbitre',
				'path' => 'uploads/Documents/Inscription_arbitre.pdf',
				'extension' => 'pdf',
				'document_type_id' => 1
			));

		Document::create(array(
				'title' => 'Nouvelle équipe',
				'slug' => 'nouvelle-equipe',
				'path' => 'uploads/Documents/Inscription_equipe.pdf',
				'extension' => 'pdf',
				'document_type_id' => 1
			));

		Document::create(array(
				'title' => 'Directives de jeu',
				'slug' => 'directives-de-jeu',
				'path' => 'uploads/Documents/Directives_de_jeu.pdf',
				'extension' => 'pdf',
				'document_type_id' => 2
			));

		Document::create(array(
				'title' => 'Status',
				'slug' => 'status',
				'path' => 'uploads/Documents/Status_GAB.pdf',
				'extension' => 'pdf',
				'document_type_id' => 2
			));

		Document::create(array(
				'title' => 'Demande de licence',
				'slug' => 'demande-de-licence',
				'path' => 'uploads/Documents/Demande_de_licence.pdf',
				'extension' => 'pdf',
				'document_type_id' => 3
			));
	}
}
