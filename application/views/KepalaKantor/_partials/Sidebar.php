 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a href="<?php echo site_url('KepalaKantor')?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

    <?php /* <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse <?php 
         $uri = $this->uri->segment(2);
         echo 
          $uri == 'datasuratmasuk' | 
          $uri == 'data_masuk_disposisi' | 
          $uri == 'datakendalisurat' |
          $uri == 'datatindak_lanjut'  ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('KepalaKantor/data_masuk_disposisi'); ?>" class="<?php echo $this->uri->segment(2) == 'masuk' ? 'active' : '' ?>">
          <i class="bi bi-circle"></i><span>Surat Masuk dan Disposisi</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('KepalaKantor/data_keluar_kendali'); ?>" class="<?php echo $this->uri->segment(2) == 'masuk' ? 'active' : '' ?>">
          <i class="bi bi-circle"></i><span>Surat Keluar dan Kendali Surat Keluar</span>
        </a>
      </li>
      
    </ul>
  </li><!-- End Forms Nav --> */ ?>
    
    
  </li><!-- End Tables Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#persetujuan-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Persetujuan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="persetujuan-nav" class="nav-content collapse 
    <?php 
         $uri = $this->uri->segment(2);
         echo 
          $uri == 'persetujuan_disposisi' | 
          $uri == 'persetujuan_suratkeluar'
          ? 'show' : '' ?> " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('KepalaKantor/persetujuan_disposisi')?>">
          <i class="bi bi-circle"></i><span>Disposisi Surat Masuk</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('KepalaKantor/persetujuan_suratkeluar'); ?>">
          <i class="bi bi-circle"></i><span>Surat Keluar</span>
        </a>
      </li>
    </ul>
    
  </li><!-- End Tables Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo site_url('login/logout'); ?>">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->


</ul>

</aside><!-- End Sidebar-->