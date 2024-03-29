
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Item | IIMMS</title>

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
    .form-control{
        border-radius: 0px !important;
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
            <a href="{{route('manage.index')}}" class="nav-link">
              <i class="fi fi-rr-layer-plus mr-2"></i>
              <p>Manage</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('record.index')}}" class="nav-link">
              <i class="fi fi-rr-move-to-folder-2 mr-2"></i>
              <p>Records</p>
            </a>
          </li>

          @if(auth()->user()->is_admin == 1)
          <li class="nav-item">
            <a href="{{route('account.index')}}" class="nav-link">
              <i class="fi fi-rr-users-alt mr-2"></i>
              <p>User Management</p>
            </a>
          </li>
          @endif

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
                  <i class="fi fi-rr-circle mr-1"></i>
                  <p>Inventory</p>
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
                    <a href="{{route('category.index')}}" class="nav-link">
                      <i class="fi fi-rr-circle-dashed mr-1"></i>
                      <p>Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('designation.index')}}" class="nav-link">
                      <i class="fi fi-rr-circle-dashed mr-1"></i>
                      <p>Designation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('item.index')}}" class="nav-link">
                      <i class="fi fi-rr-circle-dashed mr-1"></i>
                      <p>Item</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{route('assign.index')}}" class="nav-link">
                  <i class="fi fi-rr-circle mr-1"></i>
                  <p>Manage</p>
                  <i class="right fi fi-rr-angle-small-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{route('condition.index')}}" class="nav-link">
                        <i class="fi fi-rr-circle-dashed mr-1"></i>
                        <p>Condition</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{route('task.index')}}" class="nav-link">
                        <i class="fi fi-rr-circle-dashed mr-1"></i>
                        <p>Task</p>
                      </a>
                  </li>
                </ul>
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
            <h3>Create Inventory</h3>
            <p class="text-muted">Inventory | Create</p>
        </div>


      <form action="{{route('inventory.store')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="row">
            <div class="col-12 col-md-12 mt-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Item details</h3>
                        <div class="card-tools"></div>
                    </div>
                    
                    <div class="card-body p-4">
                    
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Item Code <span class="text-danger">*</span></label>
                                    <?php 
                                      $year = date("Y"); 
                                    ?>
                                    <input type="hidden" name="item_code" value="{{ $year }}-00{{$item_count + 1}}" class="form-control">
                                    <input type="text" value="{{ $year }}-00{{$item_count + 1}}" class="form-control" style="background-color: #fff;" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Item Name <span class="text-danger">*</span></label>
                                    <select name="item_id" class="form-control" required>
                                        <option value="" disabled selected>Please select</option>
                                        @foreach($items as $item)
                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                               
                                </div>
                            </div>
                            

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Actual Photo <span class="text-danger">*</span></label>
                                    <input type="file" name="image" value="{{old('image')}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Color <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="color" class="form-control">  
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Serial Number <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="serial_no" value="{{old('serial_no')}}" class="form-control">  
                                    @if($errors->has('serial_no'))
                                        <span class="text-danger">{{ $errors->first('serial_no') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">OR Number <span class="text-danger">*</span></label>
                                    <input type="text" name="or_no" value="{{old('or_no')}}" class="form-control" required>
                                    @if($errors->has('or_no'))
                                        <span class="text-danger">{{ $errors->first('or_no') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Purchased Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date_purchased" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Warranty Date <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="date" name="warranty" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Assign To <span class="text-danger">*</span></label>
                                    <select name="assign_id" class="form-control" required>
                                        <option value="" disabled selected>Please select</option>
                                        @foreach($assigns as $assign)
                                          <option value="{{$assign->id}}">{{$assign->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Designation <span class="text-danger">*</span></label>
                                    <select name="designation_id" class="form-control" required>
                                        <option value="" disabled selected>Please select</option>
                                        @foreach($destinations as $destination)
                                          <option value="{{$destination->id}}">{{$destination->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Category <span class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="" disabled selected>Please select</option>
                                        @foreach($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Bundled To <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="bundled_to" value="{{old('bundled_to')}}" class="form-control">  
                                </div>
                            </div>
                            
                        </div> <!-- end row -->
                        

                        <div class="row">
                            
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="class">Description <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="description" value="{{old('description')}}" class="form-control">  
                                </div>
                            </div>
                            
                            
                            <div class="col-12">
                            <p class="mb-0" style="font-size:18px;">(Supplier Information)</p>
                            </div>
                            <div class="col-12"><hr></div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Name <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="supplier_name" value="{{old('supplier_name')}}" class="form-control">  
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Address <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="text" name="supplier_address" value="{{old('supplier_address')}}" class="form-control">  
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="class">Contact <span class="text-muted"><small>(optional)</small></span></label>
                                    <input type="number" name="supplier_contact" value="{{old('supplier_contact')}}" class="form-control">  
                                </div>
                            </div>
                        </div>

                </div>
                    <div class="card-footer">
                        <button class="btn btn-primary mr-1">Submit</button>
                        <button class="btn btn-default">Cancel</button>
                    </div>
            </div>

      </form>
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

