<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $role_committee = Role::where('slug', 'committee')->first();
        $role_viewer = Role::where('slug', 'viewer')->first();
        $role_referee = Role::where('slug', 'referee')->first();
        $role_player = Role::where('slug', 'player')->first();

		// Committee
		$user_committee = User::create(array(
			'name' => 'Comite',
			'email' => 'comite@gabasket.ch',
			'password' => 'password'
		));
        $user_committee->roles()->attach($role_committee);

		// Viewer
		$user_viewer = User::create(array(
			'name' => 'Visionneur',
			'email' => 'visionneur@gabasket.ch',
			'password' => 'password'
		));
        $user_viewer->roles()->attach($role_viewer);

		// Referee
		$user_committee = User::create(array(
			'name' => 'Arbitre',
			'email' => 'arbitre@gabasket.ch',
			'password' => 'password'
		));
        $user_committee->roles()->attach($role_referee);

		// Player
		$user_player = User::create(array(
			'name' => 'Joueur',
			'email' => 'joueur@gabasket.ch',
			'password' => 'password'
		));
        $user_player->roles()->attach($role_player);
	}
}
