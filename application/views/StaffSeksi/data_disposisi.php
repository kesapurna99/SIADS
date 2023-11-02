<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Data Disposisi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active"><a href="#">Surat Masuk & Disposisi</a></li>
          <li class="breadcrumb-item ">Data Disposisi </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" width="100%">
            <div class="card-body">
              <h5 class="card-title text-center">Data Disposisi</h5>
           
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
            
                    <th>Indeks</th>
                    <th>Klasifikasi</th>
                    <th>Tanggal Masuk</th>
                    <th>Kode</th>
                    <th>Tanggal Penyelesaian</th>
                    <th>Tanggal Buat</th>
                    <th>Nomor Surat</th>
                    <th>Dari</th>
                    <th>Ringkasan Isi</th>
                    <th>Disposisi Kakanim</th>
                    <th>Diteruskan Kepada</th>
                    <th>Status Kepala Kantor</th>
                    <th>Status Kepala Seksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($Disposisi as $disposisi): ?>
                  <tr>
                    <td>
                      <?php echo $disposisi->indeks ?>
                    </td>
                    <td>
                      <?php echo $disposisi->klasifikasi ?>
                    </td>
                      <td>
                      <?php echo $disposisi->tgl_masuk ?>
                    </td>
                    <td>
                      <?php echo $disposisi->kode ?>
                    </td>
                      <td>
                      <?php echo $disposisi->tgl_penyelesaian ?>
                    </td>
                    <td>
                      <?php echo $disposisi->tgl_buat ?>
                    </td>
                    <td>
                      <?php echo $disposisi->nomor_surat ?>
                    </td>
                      <td>
                      <?php echo $disposisi->dari ?>
                    </td>
                    <td>
                      <?php echo $disposisi->ringkasan_isi ?>
                    </td>
                    <td>
                      <?php echo $disposisi->disposisi_kakanim ?>
                    </td>
                    <td>
                      <?php echo $disposisi->diteruskan_kepada ?>
                    </td>
                    
                    <td>
                    <?php 
                        if ($disposisi->status_kepala_kantor == 0){
                            echo "Proses"; } 
                            elseif($disposisi->status_kepala_kantor ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <td>
                      <?php 
                        if ($disposisi->status_kepala_seksi == 0){
                            echo "Proses"; } 
                            elseif($disposisi->status_kepala_seksi ==1){
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
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
  </main><!-- End #main -->

  <?php $this->load->view('StaffSeksi/_partials/Footer') ?>

</body>

</html>