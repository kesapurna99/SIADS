 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a href="<?php echo site_url('KasubagTu')?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  </li><!-- End Tables Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#persetujuan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Persetujuan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="persetujuan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('KasubagTu/persetujuan_disposisi')?>">
          <i class="bi bi-circle"></i><span>Disposisi Surat Masuk</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('KasubagTu/persetujuan_suratkeluar'); ?>">
          <i class="bi bi-circle"></i><span>Surat Keluar</span>
        </a>
      </li>
    </ul>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo site_url('Kasubagtu/Datauser'); ?>">
      <i class="ri-account-box-line"></i>
      <span>Data User</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo site_url('Kasubagtu/hak_akses'); ?>">
      <i class="ri-key-2-fill"></i>
      <span>Hak Akses</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo site_url('login/logout'); ?>">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->


</ul>

</aside><!-- End Sidebar-->