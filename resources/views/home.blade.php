@extends('layouts.app')

@section('content')
      <br><br><br>
    <div class="container">
          <div class="row justify-content-center" style="text-align: center;">
              <div class="col-md-8">

                      <!--Se chequea si existe un usuario-->
                      @if (Auth::check())
                        <!--Administrador-->
                        @if ($role_id == 1)
                          <h3 style="text-align: center; color: #ffffff;">Interfaz Administrador</h2>
                            <br><br>
                          <div class="text-center">
                              <a class="btn btn-lg boton" href="">Solicitudes Pendientes</a>
                              <br><br>
                              <a class="btn btn-lg boton" href="{{route('admin')}}">Mantener Usuarios</a>
                              <br><br>
                              <a class="btn btn-lg boton" href="{{route('horarios')}}">Mantener Bloques</a>
                              <br><br>
                              <a class="btn btn-lg boton" href="#">Mantener Laboratorios</a>
                              <br><br>
                          </div>

                        @endif
                        <!--Usuario-->
                        @if($role_id == 2)

                          <h3 style="text-align: center; color: #ffffff;">Interfaz Usuario</h2>
                            <br><br>
                          <div class="text-center">
                              <a class="btn btn-lg boton" href="{{route('horarios')}}">Disponibilidad de bloques</a>
                              <br><br>
                              <a class="btn btn-lg boton" href="">Historial y estado de solicitudes</a>
                              <br><br>
                              <a class="btn btn-lg boton" href="">Enviar observación</a>
                          </div>

                        @endif
                      @endif
              </div>
          </div>
      </div>
      @yield('script')

  @endsection
