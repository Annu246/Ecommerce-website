<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin Dashboard </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home')}}"  data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
        <span>Home</span>
        </a>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="productform"  data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span> Products</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('brandform')}}"  data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
        <span>Brands</span>
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('categoryshowform')}}"  data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
        <span>Categories</span>
        </a>

    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('orderform') }}"  data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
        <span>Orders</span>
        </a>

    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Account Pages
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#"  data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Profile</span>
        </a>

    </li> --}}

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a href="{{ route('adminlogin')}}" class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Sign In</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a href="{{ route('adminregister')}}" class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Register</span></a>
    </li>

    <!-- Divider -->


</ul>
