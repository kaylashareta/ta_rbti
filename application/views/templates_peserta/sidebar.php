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
    <a class="nav-link" href="<?php echo base_url('peserta/index')?>">
        <i class="	fas fa-home"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading --> 
<div class="sidebar-heading">
    PEMBAYARAN PENDAFTARAN
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('peserta/index_pembayaran/'.@$getjoin['id_user'])?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-money-check-alt"></i>
        <span>Pembayaran Pendaftaran</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    PROPOSAL
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('peserta/index_proposal/'.@$getjudul['id_proposal'])?>" >
        <i class="fas fa-file fa-file"></i>
        <span>Tambah Proposal</span>
    </a>
  
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
    SERTIFIKAT
</div>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('peserta/index_sertifikat')?>" data-toggle="#" data-target="#"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-certificate"></i>
        <span>Sertifikat</span>
</a>
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
