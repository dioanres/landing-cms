 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
  <img src="<?= base_url('upload/logo_ap').'/'.session()->setting['logo'] ?>" height="64px" width="81px"/>
  </div>
  <div class="sidebar-brand-text mx-3">Dashboard CMS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/dashboard') ?>">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Menu
</div>
<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/users') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Users</span></a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/aboutUs') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Tentang Kami</span></a>
</li> -->

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/anakPerusahaan') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Tentang Perusahaan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/pimpinan') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Pimpinan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/team') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Team</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-book"></i>
    <span>Visi & Misi</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= route_to('admin/visi') ?>">Visi</a>
      <a class="collapse-item" href="<?= route_to('admin/misi') ?>">Misi</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/budaya') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Sikap Kerja</span></a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/pimpinan') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Layanan</span></a>
</li> -->

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/review') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Clients</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/gallery') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Gallery</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/setting') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Setting</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->