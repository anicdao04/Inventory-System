
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipe-List | Food App</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <style>
    .content-wrapper .content{
      padding: .5rem 1rem !important;
    }
    .text-warning{
      color: #ff9007 !important;
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
              <p>Manage Menus</p>
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
                <h3>Ingredients</h3>
                <!-- <p class="text-muted">List of Ingredients</p> -->
            </div>
              
            <div class="row">
                <div class="col-12 col-sm-5 col-md-4">
                  <div class="info-box">
                    <span class="info-box-icon bg-default elevation-1"><i class="far fa-file-alt"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total no. of items</span>
                      <span class="info-box-number mt-0">
                        <span>{{$ingredients_count}}</span>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-12 mt-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Items</h3>
                            <div class="card-tools">                    
                                {!! $ingredients->links() !!}
                            </div>
                        </div>
                    
                        <div class="card-body p-0">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>UOM</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($ingredients as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td class="text-uppercase">{{$data->uom}}</td>
                                    <td>{{$data->quantity}}</td>
                                    @if($data->status == 0)
                                      <td class="text-danger">Inactive</td>
                                    @elseif($data->status == 1)
                                      <td class="text-success">Active</td>
                                    @endif
                                    <td>
                                        <a class="btn btn-default btn-sm">Reload</a>
                                        <a class="btn btn-danger btn-sm">Suspend</a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                            </table>
                        </div>

                    </div>
                    <a href="{{route('ingredient.create')}}" class="btn btn-primary">Create</a>
                </div>
            </div> <!-- /row -->   

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
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@if(Session::has('ingredient_created'))
    <script>
        toastr.info("{!! Session::get('ingredient_created') !!}");
    </script>
@elseif(Session::has('ingredient_updated'))
    <script>
        toastr.success("{!! Session::get('ingredient_updated') !!}");
    </script>
@endif

@yield('custom-script')

</body>
</html>

