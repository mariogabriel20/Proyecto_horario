<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        DB::table('users')->truncate();
        DB::table('bloques')->truncate();

		$this->call(UserTableSeeder::class);
        $this->call(BloqueTableSeeder::class);
	}
}
