<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <!-- <img class="animation__shake" src="../../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
    <img class="animation__shake" src="../../../dist/img/dadangcorlogo-preloader.png" alt="dadangcorlogo-preloader" height="100" width="70">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('/'); ?>" class="brand-link">
        <!-- <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <img src="../../../dist/img/dadangcorlogo.png" alt="dadangcorlogo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dadang Cornering</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item active">
                <a href="<?= base_url('admin/admincustomer'); ?>" class="nav-link">
                <i class="nav-icon fas fa-solid fa-users"></i>
                <p>
                    Data Customer
                </p>
                </a>
            </li>
            <li class="nav-item active">
                <a href="<?= base_url('admin/adminspareparts'); ?>" class="nav-link">
                <i class="nav-icon fas fa-solid fa-screwdriver-wrench"></i>
                <p>
                    Data Spareparts
                </p>
                </a>
            </li>
            <li class="nav-item active">
                <a href="<?= base_url('admin/admintransaksi'); ?>" class="nav-link">
                <i class="nav-icon fas fa-regular fa-rectangle-list"></i>
                <p>
                    Data Transaksi
                </p>
                </a>
            </li>
            <li class="nav-item active">
                <a href="<?= base_url('admin/logout'); ?>" class="nav-link">
                <i class="nav-icon fas fa-solid fa-arrow-right-from-bracket"></i>
                <p>
                    Logout
                </p>
                </a>
            </li>
            
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>