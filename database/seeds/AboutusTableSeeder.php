<?php

use Illuminate\Database\Seeder;
use App\Models\Aboutus;

class AboutusTableSeeder extends Seeder {

	public function run()
	{
		// Association
		Aboutus::create([
			'text' => 'Une association, non affiliée à l’ACGBA ou la FSBA, qui organise un championnat et/ou tournoi de basket-ball depuis 1951'
		]);

		// Teams
		Aboutus::create([
			'text' => '51 équipes mixtes évoluant dans 4 séries et plus de 720 licenciés (dès 15 ans)'
		]);

		// Games
		Aboutus::create([
			'text' => 'Des matchs disputés à Genève uniquement en semaine'
		]);

		// Practice
		Aboutus::create([
			'text' => 'Un seul match ou, à défaut, un entraînement par semaine pour les joueurs'
		]);

		// Licence
		Aboutus::create([
			'text' => 'une licence de joueur à Fr. 20.-- seulement et gratuite pour les joueurs jusqu’à 18 ans'
		]);

		// Conclusion
		Aboutus::create([
			'text' => 'En d’autres termes, le G.A.B. c’est évoluer dans un championnat de basket-ball sans grandes contraintes !'
		]);

		// Contact
		Aboutus::create([
			'text' => 'Si vous êtes intéressé pour inscrire une équipe ou intégrer un équipe existante, n’hésitez pas à contacter le Président.'
		]);
	}
}
