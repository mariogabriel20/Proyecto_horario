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
        DB::table('labs')->truncate();

		$this->call(UserTableSeeder::class);
        $this->call(LabTableSeeder::class);
	}
}
