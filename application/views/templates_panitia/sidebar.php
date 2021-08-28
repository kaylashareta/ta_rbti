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
    <a class="nav-link" href="<?php echo base_url('panitia/index')?>">
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
            <a class="collapse-item" href="<?php echo base_url('panitia/index_panitia')?>">Panitia</a>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_juri')?>">Juri</a>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_peserta')?>">Peserta</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Heading --> 
<div class="sidebar-heading">
    VERIFIKASI PEMBAYARAN
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBayar"
        aria-expanded="true" aria-controls="collapseBayar">
        <i class="fas fa-user-friends"></i>
        <span>Pembayaran</span>
    </a>
    <div id="collapseBayar" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Pembayaran</h6>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_verifbayar')?>">Verifikasi Pembayaran</a>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_bayarbermasalah')?>">Pembayaran Bermasalah</a>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_rekening')?>">Daftar Rekening</a>
        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Daftar Proposal
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('panitia/index_proposal')?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file fa-file"></i>
        <span>Daftar Proposal</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
    Penilaian
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('panitia/index_penilaian')?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-file fa-file"></i>
        <span>Penilaian</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    SERTIFIKAT
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSertif"
        aria-expanded="true" aria-controls="collapseSertif">
        <i class="fas fa-user-document"></i>
        <span>Sertifikat</span>
    </a>
    <div id="collapseSertif" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Sertifikat</h6>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_serrtifpanitia')?>">Sertif Panitia</a>
            <a class="collapse-item" href="<?php echo base_url('panitia/index_sertifpeserta')?>">Sertif Peserta</a>
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
