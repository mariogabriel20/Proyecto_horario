@extends('layouts.app')

@section('content')
<br><br><br>

<div class="text-center">

  <a class="btn btn-lg boton" href="{{route('register')}}">Registrar nuevo usuario</a>
  <br><br>

</div>
<br><br>
<!-- Se crea una tabla-->
<table class="a" align="center" valign="center">
  <div style="color: #ffffff;">
    <!--Se asigna los campos a rellenar con datos de la DB-->
    <tr>
  		<th>N°</th>
  		<th>Nombre</th>
  		<th>Apellido</th>
  		<th>Rut</th>
  		<th>Correo</th>
  		<th>Acciones</th>
  	</tr>
    <!--Se recorre todos los usuarios de la DB, 1x1 y al mismo tiempo se van imprimiendo en los campos de la tabla
  creada anteriormente-->
    @foreach ($users as $user)

      <tr>
        <td>{{$cont++}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->lastname}}</td>
        <td>{{$user->rut}}</td>
        <td>{{$user->email}}</td>
        <td id="{{$user->id}}" class="modificar_usuario"><i class="far fa-edit"></i><a class="container" href="{{ route('adm.eliminar', ['id' => $user->id])}}"><i class="fas fa-window-close"></a></i></td>
      </tr>
  
    @endforeach

  </div>
</table>

<!--Formulario para actualizar datos-->
<form class="formulario text-center" hidden action='{{route('adm.modificar')}}' method="post">
      {{ csrf_field() }}
      <input type="hidden" id="temp_id" name="id_usuario" value="" required>
      <br><br>
      <h4 class="text-center" style="color: #ffffff;">Nuevos datos a ingresar</h4>
      <br>
      <fieldset class="form-group in-usuario mx-auto d-block">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre_usuario" placeholder="" required>
      </fieldset>

      <fieldset class="form-group in-usuario mx-auto d-block">
        <label>Apellido</label>
        <input type="text" class="form-control" name="apellido_usuario" placeholder="" required>
      </fieldset>

      <fieldset class="form-group in-usuario mx-auto d-block">
        <label>Rut</label>
        <input type="text" class="form-control in.usuario" name="rut_usuario" placeholder="" required>
      </fieldset>

      <fieldset class="form-group in-usuario mx-auto d-block">
        <label>Correo</label>
        <input type="text" class="form-control in.usuario" name="correo_usuario" placeholder="" required>
      </fieldset>

      <button type="submit" class="btn btn-primary mx-auto d-block">Modificar</button>
</form>

<!--Script para la modificación de los datos-->

<script type="text/javascript">
    $(document).on('click', '.modificar_usuario', function(){
      var id = $(this).attr("id");
      $('.formulario').removeAttr("hidden");

      $('#temp_id').val(id);

      var asd = $('#temp_id').attr("value");
      console.log(asd);
      console.log(id);

    });

</script>


@endsection
