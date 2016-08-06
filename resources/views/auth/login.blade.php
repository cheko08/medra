@extends('layout.main')
@section('title', 'Inicio de Sesion')
@section('content')
<main>
  <center>
    <div class="section"></div>

    <h5 class="teal-text">Panel de Administración</h5>
    <div class="section"></div>

    <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="width:350px; display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

        <form class="col s12" method="post" action="{{ url('/login') }}">
          {!! csrf_field() !!}
          <div class='row'>
            <div class='col s12'>
            </div>
          </div>

          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='email' name='email' id='email' />
              <label for='email'>Ingresa tu Correo Electrónico</label>
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class='row'>
            <div class='input-field col s12'>
              <input class='validate' type='password' name='password' id='password' />
              <label for='password'>Ingresa tu Contraseña</label>
            </div>
            
          </div>

          <br />
          <center>
            <div class='row' id="login">
              <button type='submit' id="login_button" name='btn_login' class='col s12 btn btn-large waves-effect waves-teal'>Iniciar Sesión</button>
            </div>
          </center>
        </form>
      </div>
    </div>
  </center>

  <div class="section"></div>
  <div class="section"></div>
</main>
@endsection