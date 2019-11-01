<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Css -->

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Fin Css -->

        <title>Reserva de laboratorios</title>
	       <br><br><br>


	        <div align="center">
		          <a><img class="container center-block" style="width:300px; height:100px;" src="../img/logo.png"></a>
            </div>
            
            <br>

            <div align="center"><h3 style="color: white;font-family: 'Homer Simpson', cursive;">Ingeniería Civil en Informática</h3></div>

            <br><br>

    </head>

    <body>
      <br>

      	@yield('content')

        <br><br><br><br><br><br>

			<footer>
				<div>
					<a><img class="stylefooter" src="../img/footer.png"></a>
				</div>
			</footer>
    </body>
</html>
