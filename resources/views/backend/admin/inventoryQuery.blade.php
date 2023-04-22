
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventory Search Result | IIMMS</title>

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

    /* @media print{@page {size: landscape}} */
    @media print {@page {size: landscape}
    .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
  </style>


</head>

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
            <h3>Search Result</h3>
            <p class="text-muted">Result for query value: 
                @foreach($designations as $designation)
                    @if($designation->id == $_GET['designation_id'])
                        <span class="text-info">{{$designation->name}}</span>, 
                    @endif
                @endforeach    
                @foreach($assigns as $assign)
                    @if($assign->id == $_GET['assign_id'])
                        <span class="text-info">{{$assign->name}}</span>
                    @endif
                @endforeach  
            </p>
        </div>

      <div class="row">
        <!-- Info boxes -->
        <div class="col-12 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon elevation-1 bg-success"><i class="fi fi-rr-search-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total No. Query</span>
                            <span class="info-box-number mt-0">
                            <span>{{$result_count}}</span>
                            </span>
                        </div> 
                </div> 
            </div> 


            <div class="col-12 col-md-12 mt-4 myDivToPrint">
              <div class="row mb-4">
                  <div class="col-1 col-md-1 text-center">
                    <img src="{{ asset('img/spcc-logo.png') }}" style="opacity: 1; width:80%;">
                  </div>
                  <div class="col-11 col-md-11">
                    <h3 class="mb-0">SYSTEMS PLUS COMPUTER COLLEGE FOUNDATION SAN FERNANDO INC.</h3>
                    <p class="mb-0">B. Mendoza Street, City of San Fernando, Pampanga</p>
                    <h5>Inventory Report</h5>
                  </div>
              </div>
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Items</h3>
                            <div class="card-tools">                    

                            </div>
                    </div>

                    <div class="card-body p-0">
                    <table class="table ">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Name</th>
                                    <th>S.N.</th>
                                    <th>Color</th>
                                    <th>Category</th>
                                    <th>Designation</th>
                                    <th>Assigned To</th>
                                    <th>Bundled To</th>
                                    <th>Description</th>
                                    <th>Supplier</th>
                                    <th>Warranty</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                <tr>
                                    <td>{{$result->item_code}}</td>
                                    @foreach($items as $item)
                                        @if($item->id == $result->item_id)
                                            <td>{{$item->name}}</td>
                                        @endif
                                    @endforeach
                                        @if($result->serial_no == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->serial_no}}</td>
                                        @endif

                                        @if($result->color == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->color}}</td>
                                        @endif
                                    
                                        @foreach($categories as $category)
                                            @if($category->id == $result->category_id)
                                              <td>{{$category->name}}</td>
                                            @endif
                                        @endforeach

                                        @foreach($designations as $designation)
                                            @if($designation->id == $result->item_id)
                                              <td>{{$designation->name}}</td>
                                            @endif
                                        @endforeach

                                        @foreach($assigns as $assign)
                                            @if($assign->id == $result->item_id)
                                              <td>{{$assign->name}}</td>
                                            @endif
                                        @endforeach

                                        @if($result->bundled_to == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->bundled_to}}</td>
                                        @endif

                                        @if($result->description == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->description}}</td>
                                        @endif

                                        @if($result->supplier_name == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->supplier_name}}</td>
                                        @endif

                                        @if($result->warranty == null)
                                          <td>N/A</td>
                                        @else
                                          <td>{{$result->warranty}}</td>
                                        @endif

                                    <td>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="nav-icon fas fa-list mr-1"></i> Select
                                          </button>
                                          <div class="dropdown-menu" style="font-size: .875rem !important; min-width: 0px !important" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item"  href="{{url('admin/inventory/preview/' . $result->id)}}"><i class="fi fi-rr-search mr-1"></i></i> Preview</a>
                                            <a class="dropdown-item"  href="{{url('admin/inventory/modify/'. $result->id)}}"><i class="fi fi-rr-pencil mr-1"></i> Modify</a>
                                            <a class="dropdown-item"  href=""><i class="fi fi-rr-trash mr-1"></i> Delete</a>
                                          </div>
                                        </div>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                    <a href="" class="btn btn-secondary">Back</a>
                    <a href="" class="btn btn-warning print-window">Print</a>
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

@if(Session::has('item_created'))
    <script>
        toastr.success("{!! Session::get('item_created') !!}");
    </script>
@elseif(Session::has('item_updated'))
    <script>
        toastr.info("{!! Session::get('item_updated') !!}");
    </script>
@endif

<script>
  $('.print-window').click(function() {
    window.print();
  });
</script>

@yield('custom-script')
</body>
</html>

