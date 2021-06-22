@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form method="POST" action="{{ route('register') }}" class="form">
                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>Registro</h4>
                        </div>
                        <p class="text-divider">Completa tus datos</p>
                        <div class="content">

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">face</i>
                                </span>
                                <input type="text" placeholder="Nombre" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <input id="email" type="email" placeholder="Correo electrónico" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red;">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                                <input type="password" placeholder="Confirmar contraseña" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar registro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
@endsection