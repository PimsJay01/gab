<?php

use Illuminate\Database\Seeder;
use App\Models\Link;

class LinksTableSeeder extends Seeder {

	public function run()
	{
		Link::create(array(
			'title' => 'FIBA - Site de la fédération internationale',
			'img' => '',
			'url' => 'http://www.fiba.com/',
			'link_type_id' => 1
		));

		Link::create(array(
			'title' => 'FSBA - Fédération Suisse de Basket-Ball',
			'img' => '',
			'url' => 'http://www.swissbasket.ch/',
			'link_type_id' => 1
		));

		Link::create(array(
			'title' => 'AGS - Site de l\'Association Genevoise des Sports',
			'img' => '',
			'url' => 'http://www.sports-geneve.ch/',
			'link_type_id' => 1
		));

		Link::create(array(
			'title' => 'AGE - Association genevoise des entraîneurs',
			'img' => '',
			'url' => 'http://www.entraineurs.ch/',
			'link_type_id' => 1
		));

		Link::create(array(
			'title' => '12 Monkeys BBC',
			'img' => '',
			'url' => 'http://www.12monkeys.ch/',
			'link_type_id' => 2
		));

		Link::create(array(
			'title' => 'CERN',
			'img' => '',
			'url' => 'https://twiki.cern.ch/twiki/bin/view/SocialActivities/BasketballClub',
			'link_type_id' => 2
		));

		Link::create(array(
			'title' => 'Moillebeau',
			'img' => '',
			'url' => 'http://www.mbbc.ch/',
			'link_type_id' => 2
		));

		Link::create(array(
			'title' => 'Petit-Saconnex Peacocks',
			'img' => '',
			'url' => 'http://www.peacocks.ch/',
			'link_type_id' => 2
		));

		Link::create(array(
			'title' => 'Y.A.K',
			'img' => '',
			'url' => 'http://www.yak-basket.org/',
			'link_type_id' => 2
		));
	}
}
