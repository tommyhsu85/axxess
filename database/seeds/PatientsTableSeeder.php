<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$ary_patient = [
    		['name' => 'Arlie Watsica V','age' => '65','phone' => '(883) 939-9096','start_date' => '2019-03-15','deadline' => $this->deadline('2019-03-15') ],
    		['name' => 'Rose Kerluke','age' => '21','phone' => '560.442.9308 x322','start_date' => '2019-01-17','deadline' => $this->deadline('2019-01-17') ],
    		['name' => 'Annalise Kiehn','age' => '53','phone' => '930.981.4965','start_date' => '2019-03-03','deadline' => $this->deadline('2019-03-03') ],
    		['name' => 'Mr. Richie White DVM','age' => '44','phone' => '941-307-8301 x991','start_date' => '2019-02-02','deadline' => $this->deadline('2019-02-02') ],
    		['name' => 'Clarabelle Borer','age' => '43','phone' => '1-608-317-5912 x746','start_date' => '2019-01-12','deadline' => $this->deadline('2019-01-12') ],
    		['name' => 'Prof. Angie Ledner II','age' => '71','phone' => '281-245-2558 x908','start_date' => '2019-01-14','deadline' => $this->deadline('2019-01-14') ],
    		['name' => 'Jolie Hamill','age' => '10','phone' => '464.606.1619','start_date' => '2019-01-04','deadline' => $this->deadline('2019-01-04') ],
    		['name' => 'Xander Gorczany','age' => '68','phone' => '(517) 480-7381 x35696','start_date' => '2019-04-05','deadline' => $this->deadline('2019-04-05') ],
    		['name' => 'Dawn Koelpin','age' => '48','phone' => '410.232.1465 x768','start_date' => '2019-02-17','deadline' => $this->deadline('2019-02-17') ],
    		['name' => 'Breanna Cremin','age' => '16','phone' => '(716) 307-1968','start_date' => '2018-12-11','deadline' => $this->deadline('2018-12-11') ],
    	];

		foreach($ary_patient as $user){
		    Patient::create($user);
		}
    }

    private function deadline($d){
    	return date('Y-m-d',strtotime('+90 days',strtotime($d)));
    }
}
