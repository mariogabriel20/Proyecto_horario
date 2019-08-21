@extends('plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div style="">
                <div class="card-header text-center" style="color: #ffffff;"> Inicio de sesión </div>

                <div class="card-body box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                            <div>
                                <input id="rut" type="rut" class="form-control d-block mx-auto" name="rut" placeholder="Rut" value="{{ old('rut') }}" required autocomplete="rut">

                                @error('rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div>
                                <input id="password" type="password" class="form-control d-block mx-auto" name="password" placeholder="Contraseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="">
                                <input type="submit" class=" d-block mx-auto" style="width: 280px;">
                                    {{ __('Login') }}
                                </input>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
