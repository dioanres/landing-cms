 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
  
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
  <a class="nav-link" href="<?= route_to('admin/sales/profile') ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Profile</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/users') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Users</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/sales/banner') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Banner</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/sales/product') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Products</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/sales/customer') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Customer Deliveries</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= route_to('admin/sales/testimonial') ?>">
    <i class="fas fa-fw fa-book"></i>
    <span>Testimonials</span></a>
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