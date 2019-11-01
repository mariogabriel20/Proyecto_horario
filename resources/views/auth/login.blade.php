@extends('plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div style="">

                <br>

                <div class="card-body box" id="login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                            <div class="card-header text-center" style="color: #ffffff;width: 300px;margin: auto;border: 2px solid rgba(238,134,17,1);border-radius: 1rem;"> Inicio de sesión </div>

                            <br><br>

                            <div>
                                <div class="div_icon"><img src="img/icon_user.png" id="icon_user"></div>
                                <div class="div_input"><input id="rut" type="rut" class="form-control d-block mx-auto" name="rut" placeholder="Rut" value="{{ old('rut') }}" required autocomplete="rut"></div>

                                @error('rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <br>

                            <div>
                                <div class="div_icon"><img src="img/icon_pass.png" align="middle" id="icon_pass"></div>
                                <div class="div_input"><input id="password" type="password" class="form-control d-block mx-auto" name="password" placeholder="Contraseña" required autocomplete="current-password"></div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="form-group">
                            <div>
                                <input type="submit" class=" d-block mx-auto" style="width: 280px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
