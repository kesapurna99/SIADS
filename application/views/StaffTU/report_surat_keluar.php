<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Rekapitulasi Surat keluar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item active">Rekapitulasi Surat Keluar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Rekapitulasi Surat Keluar</h5>
<form action="<?php echo site_url('StaffTu/report_surat_keluar')?>" method="post"> 
              <div class="row mb-3">
                <div class="col-md-2">
                    <input type="date" name="tgl_awal" class="form-control">
                    <div class="invalid-feedback"><?php echo form_error('tgl_awal') ?></div>
                </div>
                <div class="col-md-2">
                    <input type="date" name="tgl_akhir" class="form-control">
                    <div class="invalid-feedback"><?php echo form_error('tgl_akhir') ?></div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Cari</button>
                </div>
                </form>
              </div>
           

              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Jenis Surat</th>
                    <th>nomor surat</th>
                    <th>lampiran</th>
                    <th>perihal</th>
                    <th>tanggal</th>
                    <th>dari</th>
                    <th>kepada</th>
                    <th>isi surat</th>
                    <th>Kepala Seksi</th>
                    <th>Kasubag Tu</th>
                    <th>Kepala Kantor</th>
        
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($Surat as $surat): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      <?php echo $surat->jenis_surat ?>
                    </td>
                    <td>
                      <?php echo $surat->nomor_surat ?>
                    </td>
                      <td>
                      <?php echo $surat->lampiran ?>
                    </td>
                    <td>
                      <?php echo $surat->perihal ?>
                    </td>
                      <td>
                      <?php echo $surat->tgl ?>
                    </td>
                    <td>
                      <?php echo $surat->dari ?>
                    </td>
                    <td>
                      <?php echo $surat->kepada ?>
                    </td>
                    <td>
                      <?php echo (str_word_count("$surat->isi_surat") > 60 ? substr("$surat->isi_surat",0,150)."[...]" : "$surat->isi_surat")  ?>
                    </td>
                    <td>
                    <?php 
                        if ($surat->status_kepala_kantor == 0){
                          echo "Proses";} 
                            elseif($surat->status_kepala_kantor ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <td>
                    <?php 
                        if ($surat->status_kasubag_tu == 0){
                            echo "Proses"; } 
                            elseif($surat->status_kasubag_tu ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <td>
                      <?php 
                        if ($surat->status_kepala_seksi == 0){
                          echo "Proses"; } 
                            elseif($surat->status_kepala_seksi ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    
                
                    
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
  
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/chart.js/chart.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/echarts/echarts.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/quill/quill.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/tinymce/tinymce.min.js') ?>"></script>
  <script src="<?php echo base_url('NiceAdmin/assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('NiceAdmin/assets/js/main.js') ?>"></script>

</body>

</html>