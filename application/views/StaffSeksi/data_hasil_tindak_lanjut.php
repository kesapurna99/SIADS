<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Data Hasil Tindak Lanjut</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active"><a href="#">Surat Masuk</a></li>
          <li class="breadcrumb-item ">Data Hasil Tindak Lanjut</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Data Hasil Tindak Lanjut</h5>
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Nomor Surat</th>
                    <th>Keterangan</th>
                    <th>Perihal</th>
                    <th>Tanggal Masuk</th>
                    <th>Kepada</th>
                    <th>Dibuat Oleh</th>
                    <th>Isi Ringkasan</th>
                    <th>Hasil</th>         
                    <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($tindak_lanjut as $surat): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      <?php echo $surat->nomor_surat ?>
                    </td>
                    <td>
                      <?php echo $surat->keterangan ?>
                    </td>
                    <td>
                      <?php echo $surat->perihal ?>
                    </td>
                    <td>
                      <?php echo $surat->tanggal_masuk ?>
                    </td>
                    <td>
                      <?php echo $surat->kepada ?>
                    </td>
                    <td>
                      <?php echo $surat->dibuat_oleh ?>
                    </td>
                      <td>
                      <?php echo $surat->isi_ringkasan ?>
                    </td>
                   
                   
                    
                    <td>
                      <?php echo $surat->hasil ?>
                    </td>
                   
                    <td>
                    <a href="<?php echo site_url('StaffSeksi/edittindak_lanjut/'.$surat->id_tanggapan);?>" class="btn btn-small"><i class="ri-pencil-fill"></i></a>
                      <a href="<?php echo site_url('StaffSeksi/delete_tindak_lanjut/'.$surat->id_tanggapan);?>" class="btn btn-small" ><i class="ri-delete-bin-6-line"></i></a>
                 
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