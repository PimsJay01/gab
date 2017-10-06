<?php

use Illuminate\Database\Seeder;
use App\Models\Season;

class SeasonsTableSeeder extends Seeder {

	public function run()
	{
		// Season 2016
		Season::create(array(
			'title' => '2016 - 2017',
			'start_at' => '2016-09-01 00:00:00',
			'end_at' => '2017-06-30 00:00:00'
		));

		// Season 2017
		Season::create(array(
			'title' => '2017 - 2018',
			'start_at' => '2017-09-01 00:00:00',
			'end_at' => '2018-06-30 00:00:00'
		));
	}
}
