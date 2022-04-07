<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="color: whitesmoke">
            {{ Auth::user()->name }}
        </div>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      
    </div> --}}

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('admin/color') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Colours
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/category') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Categorys
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/product') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/order') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ url('admin/payment') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Payments
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
