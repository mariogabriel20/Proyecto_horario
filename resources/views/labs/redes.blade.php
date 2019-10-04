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
		<td><button type="button" id="R-L1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V1" class="btn btn-hrs">Disponible</button></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
	</tr>

	<tr>
		<td>09:40 - 11:10</td>
		<td><button type="button" id="R-L2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V2" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>11:20 - 12:50</td>
		<td><button type="button" id="R-L3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V3" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>13:00 - 14:30</td>
		<td><button type="button" id="R-L4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V4" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>14:45 - 16:15</td>
		<td><button type="button" id="R-L5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V5" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>16:20 - 17:50</td>
		<td><button type="button" id="R-L6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V6" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>17:55 - 19:25</td>
		<td><button type="button" id="R-L7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V7" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>19:30 - 21:00</td>
		<td><button type="button" id="R-L8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V8" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>21:05 - 22:35</td>
		<td><button type="button" id="R-L9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V9" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>22:40 - 00:10</td>
		<td><button type="button" id="R-L10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V10" class="btn btn-hrs">Disponible</button></td>
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
