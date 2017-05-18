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
            Home
          </h1>
          <ol class="breadcrumb">
            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
          </ol>
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
    <!-- ./wrapper -->
@stop