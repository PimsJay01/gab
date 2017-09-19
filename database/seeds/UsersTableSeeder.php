<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Admin
		User::create(array(
				'name' => 'Admin',
				'email' => 'admin@gabasket.ch',
				'password' => 'password',
				// 'role' => 'admin'
			));

		// Committee
		User::create(array(
				'name' => 'Comite',
				'email' => 'comite@gabasket.ch',
				'password' => 'password',
				// 'role' => 'committee'
			));

		// Viewer
		User::create(array(
				'name' => 'Visionneur',
				'email' => 'visionneur@gabasket.ch',
				'password' => 'password',
				// 'role' => 'viewer'
			));

		// Referee
		User::create(array(
				'name' => 'Arbitre',
				'email' => 'arbitre@gabasket.ch',
				'password' => 'password',
				// 'role' => 'referee'
			));

		// Player
		User::create(array(
				'name' => 'Joueur',
				'email' => 'joueur@gabasket.ch',
				'password' => 'password',
				// 'role' => 'player'
			));
	}
}
