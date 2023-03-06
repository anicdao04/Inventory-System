
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Preview Item | IIMMS</title>

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
        background-color: #fff !important;
        border: 1px solid #f2f2f2;
        font-weight: 600;
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
                    <a href="" class="nav-link">
                      <i class="fi fi-rr-circle-dashed mr-1"></i>
                      <p>Condition</p>
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
            <h3>Preview Item</h3>
            <p class="text-muted">Inventory | Preview</p>
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
                            <div class="col-8 col-md-8"><!-- start col-8 -->
                                <div class="row"> <!-- start row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Item Code</span>
                                            <input type="text" value="{{$inventory->item_code}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Bundled To</span>
                                            @if($inventory->bundled_to == null)
                                              <input type="text" value="N/A" class="form-control" disabled>
                                            @else
                                              <input type="text" value="{{$inventory->bundled_to}}" class="form-control" disabled>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Color</span>
                                            @if($inventory->color == null)
                                              <input type="text" value="N/A" class="form-control" disabled>
                                            @else
                                              <input type="text" value="{{$inventory->color}}" class="form-control" disabled>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Serial Number</span>
                                            <input type="text" value="{{$inventory->item_code}}" class="form-control" disabled>
                                        </div>
                                    </div> -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">OR Number</span>
                                            <input type="text" value="{{$inventory->or_no}}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Purchased Date</span>
                                            <input type="text" value="{{ Carbon\Carbon::parse($inventory->date_purchased)->format('F d, Y') }}" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Warranty</span>
                                            @if($inventory->warranty == null)
                                              <input type="text" value="N/A" class="form-control" disabled>
                                            @else
                                              <input type="text" value="{{ Carbon\Carbon::parse($inventory->warranty)->format('F d, Y') }}" class="form-control" disabled>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Assigned To</span>
                                            @foreach($assigns as $assign)
                                              @if($assign->id == $inventory->assign_id)
                                                <input type="text" value="{{$assign->name}}" class="form-control" disabled>
                                              @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Designation</span>
                                            @foreach($designations as $designation)
                                              @if($designation->id == $inventory->designation_id)
                                                <input type="text" value="{{$designation->name}}" class="form-control" disabled>
                                              @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Category</span>
                                            @foreach($categories as $category)
                                              @if($category->id == $inventory->category_id)
                                                <input type="text" value="{{$category->name}}" class="form-control" disabled>
                                              @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <span for="class" class="text-muted">Description</span>
                                            @if($inventory->description == null)
                                              <input type="text" value="N/A" class="form-control" disabled>
                                            @else
                                              <input type="text" value="{{$inventory->color}}" class="form-control" disabled>
                                            @endif
                                            
                                        </div>
                                    </div>

                                </div> <!-- end of row -->
                                

                            </div><!-- end col-8 -->
                            <div class="col-4 col-md-4"><!-- start col-4 -->
                                <div class="form-group">
                                    <!-- <span for="class">Actual Photo</span> -->
                                    <img src="{{ asset('uploads/images/inventory/'.$inventory->image) }}" class="img-fluid img-thumbnail">
                                    <div class="form-group">
                                        <!-- <h4 class="text-center mt-3 mb-0">{{$inventory->item_name}}</h4> -->
                                            @foreach($items as $item)
                                              @if($item->id == $inventory->item_id)
                                                <!-- <input type="text" value="{{$item->name}}" class="form-control" disabled> -->
                                                <h4 class="text-center mt-3 mb-0">{{$item->name}}</h4>
                                              @endif
                                            @endforeach
                                            @if($inventory->serial_no == null)
                                              <p class="text-center">SN: N/A</p>
                                            @else
                                              <p class="text-center">SN: {{$inventory->serial_no}}</p>
                                            @endif
                                    </div>
                                    
                                </div>
                            </div><!-- end col-4 -->
                        </div>

                    </div>
                    
                    <div class="card-footer">
                        <a href="{{route('inventory.index')}}" class="btn btn-secondary">Back</a>
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

