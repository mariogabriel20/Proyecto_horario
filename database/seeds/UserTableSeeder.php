<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder{

    public function run(){
        //Administrador
        $user = new User();
        $user->name = 'Admin';
        $user->lastname = 'Adm';
        $user->rut = '1234';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('1234');
		$user->role_id = 1;
        $user->save();

        //UsuarioEjemplo
        $user = new User();
        $user->name = 'User';
        $user->lastname = 'Normal';
        $user->rut = '12345678-9';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
		$user->role_id = 2;
        $user->save();

      }
}
