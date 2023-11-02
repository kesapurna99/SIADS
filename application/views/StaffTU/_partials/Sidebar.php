<?php /* <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a href="<?php echo site_url('StaffTu')?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>FORM</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('StaffTu/report_hasil_tindak_lanjut'); ?>">
          <i class="bi bi-circle"></i><span>Input data surat masuk dan disposisi</span>
        </a>
      </li>
    </ul>
    
  </li><!-- End Tables Nav -->

   <!-- table FORMS Nav -->
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#satu-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
      <ul id="satu-nav" class="collapse " data-bs-parent="#sidebar-nav">
        <a class="nav-link collapsed" data-bs-target="#surat-masuk-nav" data-bs-toggle="collapse" href="#">
          <i class=""></i><span>Data surat masuk & disposisi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
            <ul id="surat-masuk-nav" class="nav-content collapse " data-bs-parent="#aa-nav">
                 <li>
                      <a href="<?php echo site_url('StaffTu/datasuratmasuk'); ?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>data surat masuk</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('StaffTu/data_masuk_disposisi'); ?>" class="<?php echo $this->uri->segment(2) == 'masuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Data Disposisi</span>
                      </a>
                  </li>
                  
              </ul>
    
      </ul>


      
    
 
    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('StaffTu/report_hasil_tindak_lanjut'); ?>">
          <i class="bi bi-circle"></i><span>Report Hasil Tindak Lanjut</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('StaffTu/report_surat_keluar'); ?>">
          <i class="bi bi-circle"></i><span>Report Surat Keluar</span>
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
 */?>


 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a href="<?php echo site_url('StaffTu')?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
   <!-- table FORMS Nav -->
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#satu-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
            <ul id="satu-nav" class="nav-content collapse " data-bs-parent="#aa-nav">
                 <li>
                      <a href="<?php echo site_url('StaffTu/datasuratmasuk'); ?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Input Surat masuk dan Disposisi</span>
                      </a>
                  </li>
                  
              </ul>
              <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#dua-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
            <ul id="dua-nav" class="nav-content collapse " data-bs-parent="#aa-nav">
                 <li>
                      <a href="<?php echo site_url('StaffTu/datasurat_masuk')?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Surat Masuk</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('StaffTu/datadisposisi')?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Disposisi</span>
                      </a>
                  </li>
                  
              </ul>
   

      
    
 
    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Rekapitulasi</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('StaffTu/report_hasil_tindak_lanjut'); ?>">
          <i class="bi bi-circle"></i><span>Rekapitulasi Hasil Tindak Lanjut</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('StaffTu/report_surat_keluar'); ?>">
          <i class="bi bi-circle"></i><span>Rekapitulasi Surat Keluar</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('StaffTu/report_kendali_surat'); ?>">
          <i class="bi bi-circle"></i><span>Rekapitulasi Kendali Surat</span>
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
