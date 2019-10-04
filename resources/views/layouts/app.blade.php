<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reserva de laboratorios</title>
    	<br><br>

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
            <script async custom-element="amp-date-picker" src="https://cdn.ampproject.org/v0/amp-date-picker-0.1.js"></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!--  <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">-->
      <script src="https://kit.fontawesome.com/c07a7980e1.js"></script>
      <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>   


      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto boton-is">
          <!-- Authentication Links -->
          @guest

          @else
              <li class="nav-item dropdown" >
                  <a id="navbarDropdown" class="nav-link dropdown-toggle boton-is2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" style="background-color: #F5B041;" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item" style="color: #ffffff;" href="{{route('home')}}">Home</a>

                      <a class="dropdown-item"  style="color: #ffffff;"href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Desconectarse') }}
                      </a>



                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

    	<div align="center">
    		<a><img class="container center-block" style="width:300px; height:100px;" src="../img/logo.png"></a>
    	</div>

<br><br>



</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">



                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <br><br><br><br><br><br>

   <footer>
     <div>
       <a><img class="stylefooter" src="../img/footer.png"></a>
     </div>
   </footer>



</body>
</html>
