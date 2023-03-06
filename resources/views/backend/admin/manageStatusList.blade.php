
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List of Maintenance Request | IIMMS</title>

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
                <h3 class="mb-2">Records <i class="fi fi-rr-arrow-circle-right ml-1 mr-1" style="font-size:18px"></i> <span class="text-info">Maintenance Status</span></h3>
            <p class="text-muted"><i class="fi fi-rr-info mr-1" style="font-size: 14px;"></i>List of Maintenance Request</p>
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
                        <h3 class="card-title">List of Items</h3>
                            <div class="card-tools">                    
                              {!! $lists->links() !!}
                            </div>
                    </div>
                    <div class="card-body p-0">
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Serial Number</th>
                                    <th>Item Name</th>
                                    <th>Maintenance Type</th>
                                    <th>Scheduled Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($lists as $list)
                                <tr>
                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $list->item_id)
                                        <td>{{$inventory->item_code}}</td>
                                      @endif
                                    @endforeach

                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $list->item_id)
                                        @if($inventory->serial_no == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$inventory->serial_no}}</td>
                                        @endif
                                      @endif
                                    @endforeach

                                    @foreach($inventories as $inventory)
                                      @if($inventory->id == $list->item_id)
                                        @foreach($items as $item)
                                          @if($item->id == $inventory->item_id)
                                            <td>{{$item->name}}</td>
                                          @endif
                                        @endforeach
                                      @endif
                                    @endforeach

                                    <!-- @foreach($inventories as $inventory)
                                      @if($inventory->id == $list->item_id)
                                        @if($inventory->serial_no == null)
                                            <td>N/A</td>
                                        @else
                                            <td>{{$inventory->serial_no}}</td>
                                        @endif
                                      @endif
                                    @endforeach -->

                                    <td>{{$list->type}}</td>
                                    <td>{{ Carbon\Carbon::parse($list->date_scheduled)->format('F d, Y') }}</td>

                                    @if(($list->status == 0) && ($list->is_overdue == 1))
                                        <td>Pending <span class="badge badge-pill badge-success p-1 ml-1">Due today</span></td>
                                    @elseif(($list->status == 0) && ($list->is_overdue == 2))
                                        <td>Pending <span class="badge badge-pill badge-warning p-1 ml-1">{{round((strtotime($list->date_scheduled) - time()) / 86400) }} days before due</span></td>
                                    @elseif(($list->status == 0) && ($list->is_overdue == 0))
                                        <td>Pending <span class="badge badge-pill badge-danger p-1 ml-1">Overdue</span></td>
                                    @else
                                        <td><span class="text-success">Completed</span></td>
                                    @endif
                                       
                                    <td>
                                      <a class="btn btn-sm btn-default mr-1" href="{{url('admin/manage/status/item/'. $list->id)}}">Manage</a>
                                    </td>
                                </tr> 
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                        
                </div>
                    <a href="{{route('record.index')}}" class="btn btn-secondary">Close</a>
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
@elseif(Session::has('status_updated'))
    <script>
        toastr.info("{!! Session::get('status_updated') !!}");
    </script>
@endif

@yield('custom-script')
</body>
</html>

