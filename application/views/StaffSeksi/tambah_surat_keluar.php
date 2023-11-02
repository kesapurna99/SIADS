<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>
<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Input Isi Surat Keluar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item "><a href="#">Surat Keluar</a></li>
          <li class="breadcrumb-item ">Input Isi Surat Keluar </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Kendali Surat</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>Nomor Surat</th>
                    <th>Jenis Surat</th>
                    <th>Indeks</th>
                    <th>Tanggal</th>
                    <th>Pengolah</th>
                    <th>Catatan</th>
                    <th>Klasifikasi</th>
                    <th>Surat Keluar</th>

                  </tr>
                </thead>
                <tbody>
                <?php $i=0; foreach ($Kendali as $kendali): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      
                      <?php echo $kendali->nomor_surat ?>
                    </td>
                    <td>
                      <?php echo $kendali->jenis_surat ?>
                    </td>
                    <td>
                      <?php echo $kendali->indeks ?>
                    </td>
                      <td>
                      <?php echo $kendali->tanggal ?>
                    </td>
                      <td>
                      <?php echo $kendali->pengolah ?>
                    </td>
                    <td>
                      <?php echo $kendali->catatan ?>
                    </td>
                    <td>
                      <?php echo $kendali->klasifikasi ?>
                    </td>
                      <td>
                        <?php 
                       $data = $this->db->get_where('tbl_template', ["nomor_surat" => $kendali->nomor_surat]);
                        if($data->num_rows() > 0){
                          echo "sudah dibuat";
                          } else {
                            ?><a href="<?php echo site_url('StaffSeksi/tambah_surat/'.$kendali->no_urut)?>" class="btn btn-success">Input</a>
                     
                            <?php
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

  <?php $this->load->view('StaffSeksi/_partials/Footer') ?>
</body>

</html>