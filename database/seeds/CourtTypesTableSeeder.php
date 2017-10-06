<?php

use Illuminate\Database\Seeder;
use App\Models\CourtType;

class CourtTypesTableSeeder extends Seeder {

	public function run()
	{
		// Primary school
		CourtType::create(array(
			'title' => 'Ecole primaire'
		));

		// Middle school
		CourtType::create(array(
			'title' => 'Cycle d\'orientation'
		));

		// High school
		CourtType::create(array(
			'title' => 'Collège'
		));

		// University
		CourtType::create(array(
			'title' => 'Université'
		));

		// Commercial school
		CourtType::create(array(
			'title' => 'Ecole de commerce'
		));

		// General school
		CourtType::create(array(
			'title' => 'Ecole de culture générale'
		));
	}
}
