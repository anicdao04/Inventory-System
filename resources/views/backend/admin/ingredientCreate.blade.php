
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ingredient-Create | Food App</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout.perform')}}" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <!-- <img src="{{ asset('dist/img/AdminLTELogo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PetPal</span><br> -->
      App name
      <img src="{{ asset('img/foodapp.png') }}" class="brand-image" style="opacity: .8"><br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user-logo.png') }}" class="img-circle elevation-2" alt="User Image">
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('orderparent.index')}}" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>Order</p>
            </a>
          </li>

          <div class="mt-3">
            <label>Maintenance</label>
          </div> 

          <li class="nav-item">
            <a href="{{route('recipe.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ingredient.index')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Ingredients</p>
            </a>
          </li>

          <div class="mt-3">
          <label>Settings</label>
          </div>  



          <!-- Menu -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>Menu Items<i class="right fas "></i></p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('menuparent.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('menuchild.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper p-4">
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="mb-3">
                <h3>Create</h3>
                <!-- <p>Ingredient | Create</p> -->
            </div>
            
            <form action="{{route('ingredient.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-12 mt-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ingredient Information</h3>
                            <div class="card-tools">                    
                        
                            </div>
                        </div>
                    
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="class">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="class">UOM</label>
                                    <select class="form-control" name="uom" required>
                                        <option value="" selected disabled>Please select</option>
                                        <option value="gm">GM</option>
                                        <option value="ml">ML</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                    <button class="btn btn-primary" type="Submit">Submit</button>
                    <a href="{{route('ingredient.index')}}" class="btn btn-default">Cancel</a>
                    
                </div>
            </form>
            </div>

        </div> <!-- /container-fluid -->
    </section> <!-- /section -->


</div>
<!-- /.content-wrapper -->


  
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

@yield('custom-script')
</body>
</html>

