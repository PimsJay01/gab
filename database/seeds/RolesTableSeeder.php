<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		// Committee
		Role::create(array(
			'name' => 'Comité',
			'slug' => 'committee',
			'description' => 'Description du rôle'
		));

		// Viewer
        Role::create(array(
			'name' => 'Visionneur',
			'slug' => 'viewer',
			'description' => 'Description du rôle'
		));

		// Referee
        Role::create(array(
			'name' => 'Arbitre',
			'slug' => 'referee',
			'description' => 'Description du rôle'
		));

		// Player
        Role::create(array(
			'name' => 'Joueur',
			'slug' => 'player',
			'description' => 'Description du rôle'
		));
	}
}
