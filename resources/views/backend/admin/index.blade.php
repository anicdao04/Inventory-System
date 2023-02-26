
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | IIMMS</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<!-- UI Icons -->
<link href="{{ asset('uicons/css/uicons-regular-rounded.css')}}" rel="stylesheet">
    
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <style>
    .content-wrapper .content{
      padding: .5rem 1rem !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fi fi-rr-menu-burger"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout.perform')}}" class="nav-link">Logout</a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <span style="font-size:16px;">Inventory System</span>
      <img src="{{ asset('img/spcc-logo.png') }}" class="brand-image" style="opacity: 1;"><br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user-icon.png') }}" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link active">
              <i class="fi fi-rr-chart-area mr-2"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('inventory.index')}}" class="nav-link">
              <i class="fi fi-rr-edit mr-2"></i>
              <p>Inventory</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fi fi-rr-layer-plus mr-2"></i>
              <p>Manage</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fi fi-rr-move-to-folder-2 mr-2"></i>
              <p>Records</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fi fi-rr-wrench-simple mr-2"></i>
              <p>Maintenance</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fi fi-rr-users-alt mr-2"></i>
              <p>User Management</p>
            </a>
          </li>

          <div class="user-panel mt-2 mb-2 d-flex"></div>

          <!-- Settings -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fi fi-rr-circle mr-1"></i>
              <p>Settings<i class="right fas "></i></p>
              <i class="right fi fi-rr-angle-small-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('assign.index')}}" class="nav-link">
                  <i class="fi fi-rr-circle-dashed mr-1"></i>
                  <p>Assign Area</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('designation.index')}}" class="nav-link">
                  <i class="fi fi-rr-circle-dashed mr-1"></i>
                  <p>Designation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="fi fi-rr-circle-dashed mr-1"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>

          <div class="user-panel mt-2 mb-2 d-flex"></div>

          <li class="nav-item">
            <a href="{{route('logout.perform')}}" class="nav-link">
              <i class="fi fi-rr-power mr-2"></i>
              <p>Log out</p>
            </a>
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper pt-4">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #3c73a8;">
                <div class="inner text-white"><h3>{{$inventory_count}}</h3>
                    <p>Inventory</p>
                </div>
                <div class="icon p-1" ><i class="fi fi-rr-edit" style="font-size: 50px;"></i></div>
                <a href="#" class="small-box-footer">Explore <i class="fi fi-rr-angle-double-small-right" style="font-size: 12px;"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #cbdcec;">
                <div class="inner"><h3>0</h3>
                    <p>Manage</p>
                </div>
                <div class="icon p-1"><i class="fi fi-rr-layer-plus" style="font-size: 50px;"></i></div>
                <a href="#" class="small-box-footer text-dark">Explore <i class="fi fi-rr-angle-double-small-right" style="font-size: 12px;"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #3c73a8;">
                <div class="inner text-white"><h3>0</h3>
                    <p>Records</p>
                </div>
                <div class="icon p-1"><i class="fi fi-rr-move-to-folder-2" style="font-size: 50px;"></i></div>
                <a href="#" class="small-box-footer">Explore <i class="fi fi-rr-angle-double-small-right" style="font-size: 12px;"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #cbdcec;">
                <div class="inner"><h3>0</h3>
                    <p>Maintenance</p>
                </div>
                <div class="icon p-1"><i class="fi fi-rr-wrench-simple" style="font-size: 50px;"></i></div>
                <a href="#" class="small-box-footer text-dark">Explore <i class="fi fi-rr-angle-double-small-right" style="font-size: 12px;"></i></a>
            </div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
        

</div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@yield('custom-script')
</body>
</html>

