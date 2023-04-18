
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unit Details | IIMMS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- UI Icons -->
  <link href="{{ asset('uicons/css/uicons-regular-rounded.css')}}" rel="stylesheet">
    
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
    .form-control{
        border-radius: 0px !important;
        background-color: #fff !important;
        border: 1px solid #f2f2f2;
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
            <a href="{{route('inventory.index')}}" class="nav-link">
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
            <a href="{{route('record.index')}}" class="nav-link active">
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
            <h3 class="mb-2">Records <i class="fi fi-rr-arrow-circle-right ml-1 mr-1" style="font-size:18px"></i> <span class="text-info">Request for Repair</span></h3>
            <p class="text-muted"><i class="fi fi-rr-info mr-1" style="font-size: 14px;"></i>List of Request for Repair</p>
        </div>

      <div class="row">
        <!-- Info boxes -->
            <div class="col-12 col-md-3">
                <!-- <div class="info-box">
                    <span class="info-box-icon elevation-1 bg-default"><i class="fi fi-rr-edit"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total No. of Items</span>
                            <span class="info-box-number mt-0">
                            <span></span>
                            </span>
                        </div> 
                </div>  -->
            </div> 

           
            <div class="col-12 col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Unit Details</h3>
                    </div>

                    <div class="card-body">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-8 col-md-8 px-3">
                          
                          <!-- <h5 class="text-info">Current Location</h5>
                          <hr> -->

                          <form action="{{route('repair.update')}}" method="get">
                          <div class="row"> <!-- start row -->
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Item Code</label>
                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $item->item_id)
                                        <input type="text" value="{{$inventory->item_code}}" class="form-control" disabled>
                                      @endif
                                    @endforeach
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Item Name</label>
                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $item->item_id)
                                        @foreach($items as $data)
                                          @if($data->id == $inventory->item_id)
                                            <input type="text" value="{{$data->name}}" class="form-control" disabled>
                                          @endif
                                        @endforeach
                                      @endif
                                    @endforeach
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Repair Type</label>
                                    @foreach($tasks as $task)
                                      @if($task->id == $item->type)
                                        <input type="text" value="{{$task->name}}" class="form-control" disabled>
                                      @endif
                                    @endforeach
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Scheduled Date</label>
                                      @if($item->date_scheduled == null)
                                        <input type="text" value="N/A" class="form-control" disabled>
                                      @else
                                        <input type="text" value="{{ Carbon\Carbon::parse($item->date_scheduled)->format('F d, Y') }}" class="form-control" disabled>
                                      @endif
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Status</label>
                                      @if($item->status == 0)
                                        <input type="text" value="Pending" class="form-control text-warning" disabled>
                                      @else
                                        <input type="text" value="Completed" class="form-control" disabled>
                                      @endif
                                </div>
                              </div>
                              
                            </div> <!-- end row -->

                          <h5 class="mt-5 text-info">Set Repair Status</h5>
                          <hr>
                          <div class="row"> <!-- start row -->
                              <div class="col-md-4">
                                <div class="form-group">
                                <input type="hidden" name="item_id" value="{{$item->id}}">
                                  <label>Maintenance Status<span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        @if($item->status == 0)
                                            <option value="" selected disabled>Please Select</option>
                                            <option value="1">Completed</option>
                                        @elseif($item->status == 1)
                                            <option value="" selected disabled>Please Select</option>
                                            <option value="0">Pending</option>
                                        @endif
                                    </select>
                                </div>
                              </div>
                          </div> <!-- end row -->
                          
                          <button class="btn btn-primary mt-3">Update status</button>
                          <a href="{{url('admin/manage/repairs')}}" class="btn btn-secondary mt-3">Close</a>
                          </form>

                          </div><!-- end col-8 -->

                          <div class="col-4 col-md-4 px-3"><!-- start col-4 -->
                              <div class="form-group">
                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $item->item_id)
                                        <img src="{{ asset('uploads/images/inventory/'.$inventory->image) }}" class="img-fluid img-thumbnail">
                                      @endif
                                    @endforeach

                                    
                                    <div class="form-group">
                                        @foreach($items as $data)
                                          @if($data->id == $item->item_id)
                                            <h4 class="text-center mt-3 mb-0">{{$data->name}}</h4>
                                          @endif
                                        @endforeach
                                        <p class="text-center">SN: {{$item->serial_no}}</p>
                                    </div>
                              </div>
                          </div> <!-- end col-4 -->

                        </div>
                      </div>
                    </div>

                </div>
                    <!-- <a href="" class="btn btn-primary">Create</a> -->
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
<!-- Toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@if(Session::has('schedule_created'))
    <script>
        toastr.success("{!! Session::get('schedule_created') !!}");
    </script>
@elseif(Session::has('designation_updated'))
    <script>
        toastr.info("{!! Session::get('designation_updated') !!}");
    </script>
@elseif(Session::has('schedule_invalid'))
    <script>
        toastr.error("{!! Session::get('schedule_invalid') !!}");
    </script>
@endif

@yield('custom-script')
</body>
</html>
