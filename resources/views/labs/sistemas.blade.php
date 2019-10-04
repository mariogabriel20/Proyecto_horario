@extends('horarios')

@section('contenido')


<table class="a" align="center" valign="center">
	<tr>
		<th width="130" height="50">Horarios</th>
		<th>Lunes</th>
		<th>Martes</th>
		<th>Miércoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
		<th>Sábado</th>
		<th>Domingo</th>
	</tr>
	<br>
	<tr>
		<td>08:00 - 09:30</td>
		<td><button type="button" id="S-L1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V1" class="btn btn-hrs">Disponible</button></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
	</tr>

	<tr>
		<td>09:40 - 11:10</td>
		<td><button type="button" id="S-L2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V2" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>11:20 - 12:50</td>
		<td><button type="button" id="S-L3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V3" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>13:00 - 14:30</td>
		<td><button type="button" id="S-L4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V4" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>14:45 - 16:15</td>
		<td><button type="button" id="S-L5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V5" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>16:20 - 17:50</td>
		<td><button type="button" id="S-L6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V6" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>17:55 - 19:25</td>
		<td><button type="button" id="S-L7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V7" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>19:30 - 21:00</td>
		<td><button type="button" id="S-L8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V8" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>21:05 - 22:35</td>
		<td><button type="button" id="S-L9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V9" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>22:40 - 00:10</td>
		<td><button type="button" id="S-L10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-M10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-W10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-J10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="S-V10" class="btn btn-hrs">Disponible</button></td>
	</tr>
</table>

<script type="text/javascript">
	$(document).on('click', '.btn-hrs', function(){
		var id = $(this).attr('id');
		if ($('#'+id).html() == 'Disponible') {
			$('#'+id).html('Ocupado');
	      	$('#'+id).css('background-color','#FF3600');
		}
		else{
			$('#'+id).html('Disponible');
	      	$('#'+id).css('background-color','#589B45');
	    }
    });
</script>

@endsection
