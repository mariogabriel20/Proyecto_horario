<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder{

    public function run(){
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

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
