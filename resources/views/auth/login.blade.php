@extends('layout')
    @section('content')
    <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Admin</b>LTE
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{!! url('/auth/login') !!}">
          {!! csrf_field() !!}
          @if (count($errors))
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{!! $error !!}</li>
                  @endforeach
              </ul>
          @endif
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{!! old('email') !!}" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- <a href="#">I forgot my password</a><br> -->
        <a href="{!! url('register') !!}" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@stop
