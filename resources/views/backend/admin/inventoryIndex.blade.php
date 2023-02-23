
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Items | IIMMS</title>

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
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="fi fi-rr-chart-area mr-2"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('inventory.index')}}" class="nav-link active">
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
                <a href="" class="nav-link">
                  <i class="fi fi-rr-circle-dashed mr-1"></i>
                  <p>Category 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fi fi-rr-circle-dashed mr-1"></i>
                  <p>Category 2</p>
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
    <div class="container-fluid mt-3 px-5">
        <div class="mb-3">
            <h3>List Items</h3>
            <p class="text-muted">Inventory | List</p>
        </div>

      <div class="row">
        <!-- Info boxes -->
            <div class="col-12 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon elevation-1 bg-default"><i class="fi fi-rr-edit"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total No. of Items</span>
                            <span class="info-box-number mt-0">
                            <span>1</span>
                            </span>
                        </div> 
                </div> 
            </div> 

            <div class="col-12 col-md-12 mt-4">
                <div class="card">
                    <div class="card-body p-0">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td> 
                                    <td></td> 
                                <td>
                                    <div class="btn-group" role="group">
                                      <button id="btnGroupDrop1" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="nav-icon fas fa-list mr-1"></i> Select
                                      </button>
                                      <div class="dropdown-menu" style="font-size: .875rem !important; min-width: 0px !important" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item"  href=""><i class="fi fi-rr-search mr-1"></i></i> Preview</a>
                                        <a class="dropdown-item"  href=""><i class="fi fi-rr-pencil mr-1"></i> Modify</a>
                                        <a class="dropdown-item"  href=""><i class="fi fi-rr-trash mr-1"></i> Delete</a>
                                      </div>
                                    </div>
                                </td>
                                </tr> 
                              
                                
                            </tbody>
                        </table>
                    </div>

                </div>
                    <a href="{{route('inventory.create')}}" class="btn btn-primary">Create</a>
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

