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

        // Roles

    	DB::table('roles')->delete();

    	$this->call('RolesTableSeeder');
    	$this->command->info('Roles table seeded!');

        // Users

    	DB::table('users')->delete();

    	$this->call('UsersTableSeeder');
    	$this->command->info('Users table seeded!');

        // Aboutus

		DB::table('aboutus')->delete();

		$this->call('AboutusTableSeeder');
		$this->command->info('Aboutus table seeded!');

        // Documents

        DB::table('documents')->delete();
        DB::table('document_types')->delete();

		$this->call('DocumentTypesTableSeeder');
		$this->command->info('DocumentTypes table seeded!');

		$this->call('DocumentsTableSeeder');
		$this->command->info('Documents table seeded!');

        // Courts

        DB::table('court_schedules')->delete();
        DB::table('courts')->delete();
        DB::table('court_types')->delete();
        DB::table('seasons')->delete();

		$this->call('SeasonsTableSeeder');
		$this->command->info('Seasons table seeded!');

		$this->call('CourtTypesTableSeeder');
		$this->command->info('CourtTypes table seeded!');

        factory(App\Models\Court::class, 'previous', 20)->create();
        factory(App\Models\Court::class, 'current', 10)->create();
		$this->command->info('Courts table seeded!');

		$this->call('CourtSchedulesTableSeeder');
		$this->command->info('CourtSchedules table seeded!');

        // News

        DB::table('news')->delete();

        factory(App\Models\News::class, 40)->create();
		$this->command->info('News table seeded!');

        // Links

        DB::table('links')->delete();
        DB::table('link_types')->delete();

		$this->call('LinkTypesTableSeeder');
		$this->command->info('LinkTypes table seeded!');

		$this->call('LinksTableSeeder');
		$this->command->info('Links table seeded!');

        Model::reguard();
    }
}
