 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon ">
        <i class="fas fa-university"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SI-RBTI</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('administrator/index')?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    MANAJEMEN USER
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-friends"></i>
        <span>User</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar User</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_user')?>">User</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_admin')?>">Admin</a> <!--administrator/admin tu ada di controller administrator function index_admin-->
            <a class="collapse-item" href="<?php echo base_url('administrator/index_panitia')?>">Panitia</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_juri')?>">Juri</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_peserta')?>">Peserta</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Heading -->
<div class="sidebar-heading">
    MASTER DATA
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file fa-file"></i>
        <span>Master Data</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Data:</h6>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_tema')?>">Tema Proposal</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_kriteria')?>">Kriteria Penilaian</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_artikel')?>">Artikel</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_hakakses')?>">Hak Akses</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_provinsi')?>">Provinsi</a>
            <a class="collapse-item" href="<?php echo base_url('administrator/index_kota')?>">Kabupaten/Kota</a>
            
        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->

    <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('auth/logout')?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
    </li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
