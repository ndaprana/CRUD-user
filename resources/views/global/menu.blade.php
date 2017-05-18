        <header class="main-header">
        <!-- Logo -->
        <a href="{!! url('/') !!}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs">{!! $user->name or 'User'!!}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">

                    <p>
                      {!! $user->name or 'User'!!} - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{!! url('profile') !!}" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{!! url('logout') !!}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

            <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left info">
              <p>{!! $user->name or 'User'!!}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <br><br>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Users</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{!! url('profile') !!}"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="{!! url('user') !!}"><i class="fa fa-circle-o"></i> User</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>