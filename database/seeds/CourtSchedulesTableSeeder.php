<?php

use Illuminate\Database\Seeder;
use App\Models\CourtSchedule;

class CourtSchedulesTableSeeder extends Seeder {

    private $times = [
        ['19:00', '19:50', '20:40'],
        ['19:10', '20:00', '20:50'],
        ['20:00', '20:50']
    ];

    public function run()
	{
        for ($i=0; $i < 30; $i++) {
            $this->createSchedules($i + 1);
        }
	}

    private function createSchedules($id) {
        $day = rand(1, 5);
        $time = rand(0, 2);
        $repeat = 2;
        if($time != 2) {
            $repeat = rand(2, 3);
        }

        for ($i=0; $i < $repeat; $i++) {
            CourtSchedule::create(array(
                'court_id' => $id,
                'day' => $day,
                'time' => $this->times[$time][$i]
            ));
        }
    }
}
