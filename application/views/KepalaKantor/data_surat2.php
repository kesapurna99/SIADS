<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('KepalaKantor/_partials/Head.php') ?>

<body>
<?php $this->load->view('KepalaKantor/_partials/Header') ?>
<?php $this->load->view('KepalaKantor/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Persetujuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Persetujuan</a></li>
          <li class="breadcrumb-item active">Persetujuan Surat Keluar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Data Surat Keluar </h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>ID User</th>
                    <th>jenis surat</th>
                    <th>nomor surat</th>
                    <th>lampiran</th>
                    <th>perihal</th>
                    <th>tanggal</th>
                    <th>dari</th>
                    <th>kepada</th>
                    <th>isi surat</th>
                    <th>Pengolah</th>
                    <th>Catatan</th>
                    <th>Klasifikasi</th>
                    <th>Kepala Kantor</th>
                    <th>Kasubag TU</th>
                    <th>Kepala Seksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($Surat as $surat): $i++?>
                  <tr>
                  <td>
                      <?php echo $i ?>
                    </td>
                    <td>
                      <?php echo $surat->id_user?>
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
                      <?php //echo (str_word_count("$surat->isi_surat") > 60 ? substr("$surat->isi_surat",0,150)."[...]" : "$surat->isi_surat")//  ?>
                      <a href="<?php echo site_url('KepalaKantor/laporan_pdf/'.$surat->id_template)?>" target="_blank"><button type="button" class="btn btn-small"><i class="ri-eye-fill"></i></button></a>
                    
                    </td>
                    <td><?php echo $surat->pengolah ?></td>
                    <td>
                    <?php echo $surat->catatan ?>
                    </td>
                    <td>
                    <?php echo $surat->klasifikasi ?>
                    </td>
                    <td>
                    <?php 
                        if ($surat->status_kepala_kantor == 0){
                          ?><a href="<?php echo site_url('KepalaKantor/ACCSuratKeluar/'.$surat->id_template)?>" class="btn btn-small btn-success">Input</a><?php  } 
                            elseif($surat->status_kepala_kantor ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?>
                    </td>
                    <th> 
                    <?php 
                        if ($surat->status_kasubag_tu == 0){
                            echo "Proses"; } 
                            elseif($surat->status_kasubag_tu ==1){
                              echo "ACC"; }
                              else{
                                echo "Tidak Di ACC";
                              }
                            
                            ?> </th>
                    <td>
                      <?php 
                        if ($surat->status_kepala_seksi == 0){
                          echo "Proses";} 
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

  <?php $this->load->view('KepalaKantor/_partials/Footer') ?>

</body>

</html>