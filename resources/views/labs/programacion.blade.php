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
		<td>18:00 - 19:30</td>
		<td><button type="button" id="R-L7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J7" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V7" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>19:40 - 21:10</td>
		<td><button type="button" id="R-L8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J8" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V8" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>21:20 - 22:50</td>
		<td><button type="button" id="R-L9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J9" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V9" class="btn btn-hrs">Disponible</button></td>
	</tr>

	<tr>
		<td>23:00 - 24:00</td>
		<td><button type="button" id="R-L10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-M10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-W10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-J10" class="btn btn-hrs">Disponible</button></td>
		<td><button type="button" id="R-V10" class="btn btn-hrs">Disponible</button></td>
	</tr>
</table>

@endsection
