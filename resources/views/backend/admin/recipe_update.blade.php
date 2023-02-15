
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recipe-Update | Food App</title>

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
    .table td, .table th {
    padding: 0.5rem;
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
            <a href="{{route('recipe.index')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Manage Menus</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('ingredient.index')}}" class="nav-link">
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
              <i class="far fa-circle nav-icon"></i>
              <p>Menu Items<i class="right fas "></i></p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('menuparent.index')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('menuchild.index')}}" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
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
<form action="{{url('admin/recipe/'.$recipe->id.'/register')}}" method="get">
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="mb-2">
                <h1 style="color: rgb(18, 66, 125)">{{$recipe->name}}</h1>
                
                  @foreach($parents as $parentdata)
                    @if($parentdata->id == $recipe->category_id)
                      <td>{{$parentdata->name}}</td>
                      <input type="hidden" value="{{$recipe->id}}" name="menu_id">
                      <input type="hidden" name="category_id" value="{{$parentdata->id}}">
                    @endif
                  @endforeach
            </div>
            
            <div class="row">
                <div class="col-4 col-md-4 mt-3 mb-3 px-1">
                    <img src="{{asset('uploads/images/menu_items/child/'. $recipe->image)}}" class="img-fluid">
                </div>

                <div class="col-8 col-md-8 mt-3 mb-3 px-3">
                  @if($recipe_count!=0)
                
                    <div class="bg-white p-4 shadow p-3 mb-3 bg-white rounded">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Measurement</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($recipes as $recipe)
                                <tr>
                                    <td>{{$recipe->qty}}</td> 
                                    <td>{{$recipe->measurement}}</td> 
                                    @foreach($ingredients as $ingredient)
                                      @if($ingredient->id == $recipe->ingredient_id)
                                        <td>{{$ingredient->name}}</td> 
                                      @endif
                                    @endforeach
                                    <td><a href="{{url('admin/recipe/'. $recipe->id . '/delete')}}" class="text-secondary"><small><i class="fa fa-times" aria-hidden="true"></i></small></a></td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>

                    @else
                      <div class="bg-white p-4 shadow p-3 mb-3 bg-white rounded">
                          <h5><i class="fa fa-info-circle" aria-hidden="true"></i> No recipe available</h5>
                          <small class="text-muted">Have some recipe? use the form below and click "Add ingredient" button to add one.</small><br>
                      </div>
                    @endif
                      <div class="bg-white p-4 shadow p-3 mb-5 bg-white rounded">
                      
                        <div class="row">
                            <div class="col-4 col-sm-4">
                              <input type="number" name="qty" class="form-control" placeholder="Quantity" required>
                            </div>
                            <div class="col-4 col-sm-4">
                              <select class="form-control" name="uom" required>
                                <option value="" selected disabled>UOM</option>
                                <option value="gm">GM</option>
                                <option value="ml">ML</option>
                                <option value="pc">PC</option>
                              </select>
                            </div>
                            <div class="col-4 col-sm-4">
                              <select class="form-control" name="description" required>
                                <option value="" selected disabled>Ingredient</option>
                                @foreach($ingredients as $ingredient)
                                  <option value="{{$ingredient->id}}">{{$ingredient->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="mt-3">
                            <button class="btn btn-sm btn-primary mr-1" type="submit">Add ingredient</button>
                            <a class="btn btn-sm btn-default" href="{{route('recipe.index')}}">Back</a>
                          </div>
                          
                        </div>
                      
                  </div><!--end col-8 -->

                </div>
            </div> <!-- /row -->   

        </div> <!-- /container-fluid -->
    </section> <!-- /section -->


</div>
<!-- /.content-wrapper -->
</form>
  
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


@if(Session::has('parent_created'))
    <script>
        toastr.info("{!! Session::get('parent_created') !!}");
    </script>
@elseif(Session::has('parent_updated'))
    <script>
        toastr.success("{!! Session::get('parent_updated') !!}");
    </script>
@endif

@yield('custom-script')
</body>
</html>

