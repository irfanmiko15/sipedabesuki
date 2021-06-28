<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
   
    <div class="navbar-nav ml-auto">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Control Sidebar Toggle Button -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('dist/img/avatar5.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color:#6c757d">
                <img src="{{asset('dist/img/avatar5.png')}}" class="img-circle" alt="User Image">

                <p style="color:white">
                {{ Auth::user()->name }} - SIBESTRO
                  <small>2021</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="row">
        <!-- /.col -->
                
                <div class="col-xs-6"style="margin-left:10px;margin:right:30px;">
                  <a href="{{route('ganti-password')}}" class="btn btn-default ">Ganti Password</a>
                </div>
                <div style="margin-right:10px;margin-left:30px;" >
                  <a href="{{route('logout')}}" class="btn btn-default ">Sign out</a>
                </div>
                   
                    <!-- /.col -->
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
  </nav>