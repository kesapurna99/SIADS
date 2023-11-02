<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Report Hasil Tindak Lanjut</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Report</a></li>
          <li class="breadcrumb-item active">Report Hasil Tindak Lanjut</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Report Hasil Tindak Lanjut</h5>
<form action="<?php echo site_url('StaffSeksi/report_hasil_tindak_lanjut')?>" method="post"> 
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
               <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Nomor Surat</th>
                    <th>Perihal</th>
                    <th>Isi Ringkasan</th>
                    <th>Dibuat Oleh</th>
                    <th>Kepada</th>
                    <th>Tanggal Masuk</th>
                    <th>Hasil</th>
                    <th>Keterangan</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($Surat as $surat): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      <?php echo $surat->nomor_surat ?>
                    </td>
                    <td>
                      <?php echo $surat->perihal ?>
                    </td>
                      <td>
                      <?php echo $surat->isi_ringkasan ?>
                    </td>
                    <td>
                      <?php echo $surat->dibuat_oleh ?>
                    </td>
                      <td>
                      <?php echo $surat->kepada ?>
                    </td>
                    <td>
                      <?php echo $surat->tanggal_masuk ?>
                    </td>
                    <td>
                      <?php echo $surat->hasil ?>
                    </td>
                    <td>
                      <?php echo $surat->keterangan ?>
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

  <?php $this->load->view('StaffSeksi/_partials/Footer') ?>

</body>

</html>