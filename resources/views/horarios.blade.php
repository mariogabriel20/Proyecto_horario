@extends('layouts.app')

@section('content')

<br><br>
<div class="text-center">

<a class="btn btn-lg boton" href="{{route('labs.redes')}}">Redes</a>
<a class="btn btn-lg boton" href="{{route('labs.programacion')}}">Programación</a>
<a class="btn btn-lg boton" href="{{route('labs.sistemas')}}">Sistemas</a>

</div>
<br>

	@yield('contenido')

	<br>
	<p style="color: #ffffff; text-align: center;">Horario Especial: Para solicitar un laboratorio en estos horarios
	debes acercarte directamente con el encargado de laboratorios</p>

@endsection
