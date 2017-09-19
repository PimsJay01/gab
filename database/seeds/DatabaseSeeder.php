<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Users

    	DB::table('users')->delete();

    	$this->call('UsersTableSeeder');
    	$this->command->info('Users table seeded!');

        // Aboutus

		DB::table('aboutus')->delete();

		$this->call('AboutusTableSeeder');
		$this->command->info('Aboutus table seeded!');

        Model::reguard();
    }
}
