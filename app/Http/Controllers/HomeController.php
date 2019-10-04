<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller{

	//Administrador = 1
	//Usuario = 2

	public function __construct(){
        $this->middleware('auth');
    }

		public function index(Request $request){
			$role_id = $request->user()->role_id;
			//dd($role_id);
			return view('home', ['role_id' => $role_id]);

		}

		public function vistahorarios(Request $request){
				$role_id = $request->user()->role_id;

				return view('horarios');
		}

		public function vistadmin(Request $request){
				$users = User::all();
				$i = 1;
				return view('admin', ['users' => $users, 'cont' => $i]);

		}

		public function vistaredes(Request $request){
				$users = User::all();
				return view('labs.redes');

		}

		public function vistaprogramacion(Request $request){
				$users = User::all();
				return view('labs.programacion');
		}

		public function vistasistemas(Request $request){
				$users = User::all();
				return view('labs.sistemas');
		}

		public function login(Request $request){
			/*Id recibido por jQuery*/
			$id = $request->id_usuario;
			$nombre = $request->nombre_usuario;
			$apellido = $request->apellido_usuario;
			$rut = $request->rut_usuario;
			$correo = $request->correo_usuario;

			$rs = User::where('id', $id)->update(['name' => $nombre,'lastname' => $apellido,'rut' => $rut,'email' => $correo]);

			$users = User::all();
			$i = 1;
			return view('admin', ['users' => $users, 'cont' => $i]);
		}

		public function modificar_usuario(Request $request){
			/*Id recibido por jQuery*/
			$id = $request->id_usuario;
			$nombre = $request->nombre_usuario;
			$apellido = $request->apellido_usuario;
			$rut = $request->rut_usuario;
			$correo = $request->correo_usuario;

			$rs = User::where('id', $id)->update(['name' => $nombre,'lastname' => $apellido,'rut' => $rut,'email' => $correo]);

			$users = User::all();
			$i = 1;
			return view('admin', ['users' => $users, 'cont' => $i]);
		}

		public function eliminar_usuario(Request $request, $id){
			$rs = User::where('id', $id)->delete();

			$users = User::all();
			$i = 1;
			return view('admin', ['users' => $users, 'cont' => $i]);
		}

}
