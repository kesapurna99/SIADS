<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>
<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
             <a href="<?php echo site_url('StaffSeksi/tambahkendalisurat'); ?>" class="btn btn-success"  type="button">Tambah <i class="ri-add-circle-line"></i></a>
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
                    <th>Action</th>

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
                      <a href="<?php echo site_url('StaffSeksi/editkendalisurat/'.$kendali->no_urut)?>" class="btn btn-small"><i class="ri-pencil-fill"></i></a>
                      <a href="<?php echo site_url('StaffSeksi/deletekendali/'.$kendali->no_urut);?>" class="btn btn-small"><i class="ri-delete-bin-6-line"></i></a>
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