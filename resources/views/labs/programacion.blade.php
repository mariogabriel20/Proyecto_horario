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
		<td><button type="button" id="P-L1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J1" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V1" class="btn btn-hrs">Disponible</button></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
		<td rowspan="10"><a><img class="stylefooter hr-especial" src="../img/hr-especial.png"></a></td>
	</tr>

	<tr>
		<td>09:40 - 11:10</td>
		<td><button type="button" id="P-L2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V2" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>11:20 - 12:50</td>
		<td><button type="button" id="P-L3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V3" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>13:00 - 14:30</td>
		<td><button type="button" id="P-L4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V4" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>14:45 - 16:15</td>
		<td><button type="button" id="P-L5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V5" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>16:20 - 17:50</td>
		<td><button type="button" id="P-L6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V6" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>17:55 - 19:25</td>
		<td><button type="button" id="P-L7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V7" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>19:30 - 21:00</td>
		<td><button type="button" id="P-L8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V8" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>21:05 - 22:35</td>
		<td><button type="button" id="P-L9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V9" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>22:40 - 00:10</td>
		<td><button type="button" id="P-L10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-M10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-W10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-J10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="P-V10" class="btn btn-hrs">Disponible</button></td>
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
