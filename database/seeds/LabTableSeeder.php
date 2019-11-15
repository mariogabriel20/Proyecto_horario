<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Lab;

class LabTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Lab::create([
    		'name' => 'Redes',
        	'availability' => 0,
    	]);

    	Lab::create([
    		'name' => 'Programacion',
        	'availability' => 0,
    	]);

    	Lab::create([
    		'name' => 'Sistemas',
        	'availability' => 0,
    	]);
    }
}
