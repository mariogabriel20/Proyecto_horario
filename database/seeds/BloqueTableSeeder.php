<?php

use Illuminate\Database\Seeder;
use App\Bloque;

class BloqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 5; $i++) { 

    		for ($j=0; $j < 9; $j++) { 
    		
		    	if (($i + 1) == 1) {
		    		$dia = 'lunes';	
		    	}elseif (($i + 1) == 2) {
		    		$dia = 'martes';
		    	}elseif (($i + 1) == 3) {
		    		$dia = 'miercoles';
		    	}elseif (($i + 1) == 4) {
		    		$dia = 'jueves';
		    	}else{
		    		$dia = 'viernes';
		    	}

		    	Bloque::create([
		    		'bloque' => $j+1,
		    		'dia' => $dia,
		    		'labName' => 'redes',
		    		'availability' => 1
		    	]);

		    	Bloque::create([
		    		'bloque' => $j+1,
		    		'dia' => $dia,
		    		'labName' => 'programacion',
		    		'availability' => 1
		    	]);

		    	Bloque::create([
		    		'bloque' => $j+1,
		    		'dia' => $dia,
		    		'labName' => 'sistemas',
		    		'availability' => 1
		    	]);
		    }
    	}
        
    }
}
