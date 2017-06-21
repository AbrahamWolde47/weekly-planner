<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++){

        	Plan::create(
			[
            'projects' => 'projects$i',
            'training' => 'training$i',
            'challenges' => 'challenges$i',
            'personal_projects' => 'personal_projects$i'

        	]
    	);
        }
    }
}
