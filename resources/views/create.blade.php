@extends('layout')
  @section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

          @include('global.menu')   

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Form Add User
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Add User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{!! url('/auth/register') !!}">
                  {!! csrf_field() !!}
                  @if (count($errors))
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{!! $error !!}</li>
                          @endforeach
                      </ul>
                  @endif
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" value="{!! old('name') !!}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{!! old('email') !!}" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Retype Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation" required>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.box -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      @include('global.copyright')
    </div>
@stop