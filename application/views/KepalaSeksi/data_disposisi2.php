<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('KepalaSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('KepalaSeksi/_partials/Header') ?>
<?php $this->load->view('KepalaSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Persetujuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Persetujuan</a></li>
          <li class="breadcrumb-item active">Persetujuan disposisi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card" width="100%">
            <div class="card-body">
              <h5 class="card-title text-center">Disposisi Surat Masuk</h5>
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Nama Instansi</th>
                    <th>lampiran</th>
                    <th>Perihal</th>
                    <th>tanggal</th>
                    <th>Dari</th>
                    <th>Kepada</th>
                    <th>Indeks</th>
                    <th>Klasifikasi</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Ringkasan Isi</th>
                    <th>Disposisi Kakanim</th>
                    <th>Diteruskan Kepada</th>
                    <th>Kepala Kantor</th>
                    <th>Kasubag TU</th>
                    <th>Kepala Seksi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=0; foreach ($Disposisi as $disposisi): $i++?>
                  <tr>
                  <td>
                      <?php echo $i; ?>
                    </td>
                    <td>
                      <?php echo $disposisi->kode ?>
                    </td>
                    <td>
                      <?php echo $disposisi->nama_instansi ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('./uploads/'. $disposisi->lampiran)   ?>" target="_blank">lihat</a>
                    </td>
                      <td>
                      <?php echo $disposisi->perihal ?>
                    </td>
                    <td>
                      <?php echo $disposisi->tgl ?>
                    </td>
                      <td>
                      <?php echo $disposisi->dari ?>
                    </td>
                    <td>
                      <?php echo $disposisi->kepada ?>
                    </td>
                    <td>
                      <?php echo $disposisi->indeks ?>
                    </td>
                      <td>
                      <?php echo $disposisi->klasifikasi ?>
                    </td>
                    <td>
                      <?php echo $disposisi->tgl_buat ?>
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
                        if ($disposisi->status_kasubag_tu == 0){
                            echo "Proses"; } 
                            elseif($disposisi->status_kasubag_tu ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <td>
                      <?php 
                        if ($disposisi->status_kepala_seksi == 0){
                          ?> <a href="<?php echo site_url('KepalaSeksi/ACCkepala_kantor/'.$disposisi->id_disposisi)?>" class="btn btn-success">Input</a><?php } 
                        
                            elseif($disposisi->status_kepala_seksi ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <td>
                    <a href="<?php echo base_url('./uploads/'. $disposisi->isi_surat)   ?>" target="_blank" class="btn btn-small"><i class="ri-eye-fill"></i></a>
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
  <?php $this->load->view('KepalaSeksi/_partials/Footer') ?>

</body>

</html>