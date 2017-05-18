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
            User Tables
            <small>List of User</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
          </ol>
        </section>

      <!-- Main content -->
      <section class="content">

        <a href="{!! url('user/add') !!}" class="btn btn-primary">Add User</a><br><br>

        <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  @foreach($users as $data)
                  <tr>
                    <td>{!! $data->id !!}</td>
                    <td>{!! $data->name !!}</td>
                    <td>{!! date("Y-m-d", $data->created_date) !!}</td>
                    <td>
                    @if($data->status == 1)
                      <span class="label label-success">Active</span></td>
                    @else
                      <span class="label label-danger">Inactive</span></td>
                    @endif
                    <td>
                    <a class="btn" href="{!! url('user/edit/'.$data->id) !!}"><i class="fa fa-edit"></i></a>
                    @if($data->status == 1)
                      <a class="btn" href="{!! url('user/inactive/'.$data->id) !!}"><i class="fa fa-thumbs-o-down"></i></a>
                    @else
                      <a class="btn" href="{!! url('user/active/'.$data->id) !!}"><i class="fa fa-thumbs-o-up"></i></a>
                    @endif
                    <a class="btn" href="{!! url('user/delete/'.$data->id) !!}"><i class="fa fa-trash"></i></a></li>
                    </td>
                  </tr>
                  @endforeach
                  
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
      </section>
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.8
        </div>
        <strong>Copyright &copy; 2017 </strong> All rights
        reserved.
      </footer>
    </div>
@stop