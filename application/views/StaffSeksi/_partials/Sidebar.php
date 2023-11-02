 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
    <a href="<?php echo site_url('StaffSeksi')?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

    <!-- table FORMS Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#satu-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Form</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
      <ul id="satu-nav" class="collapse " data-bs-parent="#sidebar-nav">
        <a class="nav-link collapsed" data-bs-target="#surat-masuk-nav" data-bs-toggle="collapse" href="#">
          <i class=""></i><span>Surat Masuk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
            <ul id="surat-masuk-nav" class="nav-content collapse " data-bs-parent="#aa-nav">
                 <?php /* <li>
                    <a href="<?php echo site_url('StaffSeksi/data_masuk_disposisi'); ?>" class="<?php echo $this->uri->segment(2) == 'data_masuk_disposisi' ? 'active' : '' ?>">
                      <i class="bi bi-circle"></i><span>Data Surat Masuk dan Disposisi</span>
                    </a>
                  </li> */ ?>
                  <li>
                    <a href="<?php echo site_url('StaffSeksi/datatindak_lanjut'); ?>" class="<?php echo $this->uri->segment(2) == 'disposisi' ? 'active' : '' ?>">
                       <i class="bi bi-circle"></i><span>Input Hasil Tindak Lanjut</span>
                    </a>
                  </li>
                  <?php /*<li>
                    <a href="<?php echo site_url('StaffSeksi/data_hasil_tindak_lanjut'); ?>" class="<?php echo $this->uri->segment(2) == 'disposisi' ? 'active' : '' ?>">
                       <i class="bi bi-circle"></i><span>Data Hasil Tindak Lanjut</span>
                    </a>
                  </li> */ ?>
              </ul>
    
      </ul>


      <ul id="satu-nav" class="collapse " data-bs-parent="#sidebar-nav">
        <a class="nav-link collapsed" data-bs-target="#persetujuan-nav" data-bs-toggle="collapse" href="#">
        <i class=""></i><span>Surat Keluar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
            <ul id="persetujuan-nav" class="nav-content collapse " data-bs-parent="#bb-nav">
            <li>
                    <a href="<?php echo site_url('StaffSeksi/tambahkendalisurat'); ?>">
                    <i class="bi bi-circle"></i><span>Input Kendali Surat Keluar</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('StaffSeksi/tambah_surat_keluar')?>">
                    <i class="bi bi-circle"></i><span>Input Isi Surat Keluar</span>
                      </a>
                  </li>
                  
                <?php /* <li>
                    <a href="<?php echo site_url('StaffSeksi/data_keluar_kendali'); ?>">
                    <i class="bi bi-circle"></i><span>Data Surat Keluar & Kendali Surat Keluar</span>
                    </a>
                  </li> */?>
            </ul>
    
      </ul>
      
      <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#dua-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
            <ul id="dua-nav" class="nav-content collapse " data-bs-parent="#aa-nav">
                 <li>
                      <a href="<?php echo site_url('StaffSeksi/data_hasil_tindak_lanjut'); ?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Hasil Tindak Lanjut</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('StaffSeksi/data_surat')?>" class="<?php echo $this->uri->segment(2) == 'datasuratmasuk' ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Surat Keluar</span>
                      </a>
                  </li>
                  
              </ul>
  </li><!-- End Tables Forms -->
  </li><!-- End Forms Nav -->
    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Rekapitulasi</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo site_url('StaffSeksi/report_hasil_tindak_lanjut'); ?>">
          <i class="bi bi-circle"></i><span>Rekapitulasi Hasil Tindak Lanjut</span>
        </a>
      </li>
      <?php /*<li>
      <a href="<?php echo site_url('StaffSeksi/report_surat_keluar'); ?>">
          <i class="bi bi-circle"></i><span>Report Surat Keluar</span>
        </a>
      </li>*/ ?>
    </ul> 
    
  </li><!-- End Tables Nav -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo site_url('login/logout'); ?>">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li>
  
  </li><!-- End Tables Nav -->




</ul>

</aside><!-- End Sidebar-->