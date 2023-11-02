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

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>no</th>
                    <th>id jenis surat</th>
                    <th>nomor surat</th>
                    <th>lampiran</th>
                    <th>perihal</th>
                    <th>tanggal</th>
                    <th>dari</th>
                    <th>kepada</th>
                    <th>isi surat</th>
                    <th>Paraf</th>
                    <th>Qr Code</th>
                    <th>Kepala Kantor</th>
                    <th>Kasubag Tu</th>
                    <th>Kepala Seksi</th>
                    <th>Action</th>
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
                      <?php if($surat->paraf != ""){?>
                          <a href="<?php echo base_url('uploads/paraf/'.$surat->paraf) ?>">lihat</a>
                      <?php }?>
                    </td>
                    <td><?php if($surat->paraf != ""){?>
                      <a href="<?php echo base_url('uploads/qr_code/'.$surat->qr_code) ?>">lihat</a>
                      <?php }?>
                    </td>
                    <td>
                    <?php 
                        if ($surat->status_kepala_kantor == 0){
                            echo "Proses"; } 
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
                      <td>
                     <a href="<?php echo site_url('StaffSeksi/laporan_pdf/'.$surat->id_template)?>" target="_blank"><button type="button" class="btn btn-small"><i class="ri-eye-fill"></i></button></a>
                      <a href="<?php echo site_url('StaffSeksi/edit_surat/'.$surat->id_template)?>" class="btn btn-small"><i class="ri-pencil-fill"></i></a>
                      <a href="<?php echo site_url('StaffSeksi/delete_surat/'.$surat->id_template);?>" class="btn btn-small"><i class="ri-delete-bin-6-line"></i></a>
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