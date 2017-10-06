<?php

use Illuminate\Database\Seeder;
use App\Models\LinkType;

class LinkTypesTableSeeder extends Seeder {

	public function run()
	{
		// Basket-ball
		LinkType::create(array(
			'title' => 'Basket-ball'
		));

		// GAB Teams
		LinkType::create(array(
			'title' => 'Equipes du GAB'
		));
	}
}
