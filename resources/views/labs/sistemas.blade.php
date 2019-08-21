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
		<td><button type="button" id="M2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J2" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V2" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>11:20 - 12:50</td>
		<td><button type="button" id="L3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J3" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V3" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>13:00 - 14:30</td>
		<td><button type="button" id="L4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J4" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V4" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>14:45 - 16:15</td>
		<td><button type="button" id="L5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J5" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V5" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>16:20 - 17:50</td>
		<td><button type="button" id="L6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J6" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V6" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>18:00 - 19:30</td>
		<td><button type="button" id="L7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V7" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>19:40 - 21:10</td>
		<td><button type="button" id="L8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V8" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>21:20 - 22:50</td>
		<td><button type="button" id="L9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V9" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>23:00 - 24:00</td>
		<td><button type="button" id="L10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="M10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="W10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="J10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="V10" class="btn btn-hrs">Disponible</button></td>
	</tr>
</table>


@endsection
