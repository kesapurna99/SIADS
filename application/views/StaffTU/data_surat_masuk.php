<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Data Surat Masuk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data</a></li>
          <li class="breadcrumb-item ">Surat Masuk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center ">Data Surat Masuk</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Nomor Surat</th>
                    <th>Nama Instansi</th>
                    <th>Lampiran</th>
                    <th>Perihal</th>
                    <th>Tanggal</th>
                    <th>Dari</th>
                    <th>Kepada</th>
                    <th>Status Disposisi</th>
                    <th>Action</th>
                    
       
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($Surat_masuk as $surat_masuk): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      <?php echo $surat_masuk->kode ?>
                    </td>
                    <td>
                      <?php echo $surat_masuk->nama_instansi ?>
                    </td>
                    <td>
                      <?php echo $surat_masuk->lampiran ?>
                    </td>
                    <td>
                      <?php echo $surat_masuk->perihal ?>
                    </td>
                      <td>
                      <?php echo $surat_masuk->tgl ?>
                    </td>
                    <td>
                      <?php echo $surat_masuk->dari ?>
                    </td>
                      <td>
                      <?php echo $surat_masuk->kepada ?>
                    </td>
                      
                    <td>
                      <?php if($surat_masuk->status_disposisi == 0){
                        echo "proses";}
                      else{
                        echo "Sudah Di Disposisi";
                      }
  ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('uploads/'.$surat_masuk->isi_surat) ?>" target="_blank" class="btn btn-small"><i class="ri-eye-fill"></i></a>
                      <a href="<?php echo site_url('StaffTu/editsuratmasuk/'.$surat_masuk->nomor_surat)?>" class="btn btn-small"><i class="ri-pencil-fill"></i></a>
                      <a href="<?php echo site_url('StaffTu/delete_suratmasuk/'.$surat_masuk->nomor_surat);?>" class="btn btn-small"><i class="ri-delete-bin-6-line"></i></a>
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