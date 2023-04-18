
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modify Inventory | IIMMS</title>

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
                  <i class="fi fi-rr-circle mr-1"></i>
                  <p>Inventory</p>
                  <i class="right fi fi-rr-angle-small-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('assign.index')}}" class="nav-link active">
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
            <h3>Modify Inventory</h3>
            <p class="text-muted">Inventory | Modify</p>
        </div>

      
      <form action="{{url('admin/inventory/update/'.$inventory->id)}}" method="get" enctype="multipart/form-data">
      @csrf
      <!-- @method('PUT') -->
        <div class="row">
            <div class="col-12 col-md-12 mt-4 mb-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Item details</h3>
                        <div class="card-tools"></div>
                    </div>
                    
                    <div class="card-body p-4">
                        <div class="row"><!-- start row -->
                            <div class="col-8 col-md-8 px-5 py-3"><!-- start col-8 -->
                                <div class="row"> <!-- start row -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Item Code <span class="text-danger">*</span></label>
                                            <input type="text" name="item_code" value="{{$inventory->item_code}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Serial Number <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="serial_no" value="{{$inventory->serial_no}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Color <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="color" value="{{$inventory->color}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Assign To <span class="text-danger">*</span></label>
                                            <select name="assign_id" class="form-control" required>
                                                @foreach($assigns as $assign)
                                                    @if($assign->id == $inventory->assign_id)
                                                        <option value="{{$assign->id}}" selected>{{$assign->name}}</option>
                                                    @elseif($assign->id != $inventory->assign_id)
                                                        <option value="{{$assign->id}}">{{$assign->name}}</option>
                                                    @endif
                                                @endforeach
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Designation <span class="text-danger">*</span></label>
                                            <select name="designation_id" class="form-control" required>
                                                @foreach($designations as $designation)
                                                    @if($designation->id == $inventory->designation_id)
                                                        <option value="{{$designation->id}}" selected>{{$designation->name}}</option>
                                                    @elseif($designation->id != $inventory->designation_id)
                                                        <option value="{{$designation->id}}">{{$designation->name}}</option>
                                                    @endif
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Warranty <span class="text-danger">*</span></label>
                                            <input type="date" name="warranty" value="{{$inventory->warranty}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Item Name <span class="text-danger">*</span></label>
                                            <input type="text" name="item_name" value="{{$inventory->item_name}}" class="form-control" required>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Category <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control" required>
                                                @foreach($categories as $category)
                                                    @if($category->id == $inventory->category_id)
                                                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                    @elseif($category->id != $inventory->category_id)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Bundled To <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="bundled_to" value="{{$inventory->bundled_to}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Purchased Date <span class="text-danger">*</span></label>
                                            <input type="date" name="date_purchased" value="{{$inventory->date_purchased}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">OR Number <span class="text-danger">*</span></label>
                                            <input type="text" name="or_no" value="{{$inventory->or_no}}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Description <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="description" value="{{$inventory->description}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Supplier Name <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="supplier_name" value="{{$inventory->supplier_name}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Supplier Address <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="supplier_address" value="{{$inventory->supplier_address}}" class="form-control">  
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="class">Supplier Contact <span class="text-muted"><small>(optional)</small></span></label>
                                            <input type="text" name="supplier_contact" value="{{$inventory->supplier_contact}}" class="form-control">  
                                        </div>
                                    </div>

                                </div> <!-- end row -->
                            </div> <!-- end col-8 -->

                            <div class="col-4 col-md-4 px-5 py-3"><!-- start col-4 -->
                                <div class="form-group">
                                    <label for="class">Actual Photo <span class="text-danger">*</span></label>
                                        <img src="{{asset('uploads/images/inventory/'. $inventory->image)}}" class="img-fluid">
                                            <div class="form-group">
                                                <label>Item Name</label>
                                                <select name="item_id" class="form-control" required>
                                                  @foreach($items as $item)
                                                      @if($item->id == $inventory->item_id)
                                                          <option value="{{$item->id}}" selected>{{$item->name}}</option>
                                                      @elseif($item->id != $inventory->item_id)
                                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                                      @endif
                                                  @endforeach
                                                </select>
                                                
                                            </div>

                                        <p for="class" class="mt-5"><small><span class="text-danger">Change Image?</span> <span>(click Choose File button below)</span></small></p>
                                        <input type="file" class="form-control" name="image">
                                </div>
                            </div><!-- end col-4 -->
                        </div><!-- end row -->


                </div>
                    <div class="card-footer">
                        <button class="btn btn-primary mr-1">Update</button>
                        <a class="btn btn-default" href="{{route('inventory.index')}}">Cancel</a>
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

