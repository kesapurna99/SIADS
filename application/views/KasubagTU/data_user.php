<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('KasubagTU/_partials/Head.php') ?>

<body>
<?php $this->load->view('KasubagTU/_partials/Header') ?>
<?php $this->load->view('KasubagTU/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center" >Data User</h5>
             <a href="<?php echo site_url('Kasubagtu/tambahuser'); ?>" class="btn btn-success"  type="button">Tambah <i class="ri-add-circle-line"></i></a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis kelamin</th>
                    <th>Ttl</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Divisi</th>
                    <th>Hak Akses</th>
                    <th>Paraf</th>
                    <th>Code QR</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; foreach ($user as $user): $i++ ?>
                  <tr>
                    <td>
                      <?php echo $i?>
                    </td>
                    <td>
                      <?php echo $user->NIP?>
                    </td>
                    <td>
                      <?php echo $user->nama ?>
                    </td>
                    <td>
                      <?php echo $user->jenis_kelamin ?>
                    </td>
                      <td>
                      <?php echo $user->ttl ?>
                    </td>  
                      <td>
                      <?php echo $user->no_hp ?>
                    </td>
                    <td>
                      <?php echo $user->alamat ?>
                    </td>
                      <td>
                      <?php echo $user->jabatan ?>
                    </td>
                    <td>
                      <?php echo $user->divisi ?>
                    </td>
                    <td>
                    <?php 
                       
                       if($user->hak_akses != null){
                      
                         if($user->hak_akses == 1){
                          echo "Kepala Kantor";
                         }elseif($user->hak_akses == 2){
                          echo "Kasubag TU";
                         }elseif($user->hak_akses == 3){
                          echo "Staff TU";
                         }elseif($user->hak_akses == 4){
                          echo "Kepala Seksi";
                         }elseif($user->hak_akses == 5){
                          echo "Staff Seksi";
                         }
                       }
                         else{
                           ?><a href="<?php echo site_url('KasubagTu/tambah_hak_akses/'. $user->NIP);?>">ADD</a>
                         <?php }
                        ?>
                    </td>
                    <td>
                      <?php if($user->paraf != ""){?>
                          <a href="<?php echo base_url('uploads/paraf/'.$user->paraf) ?>">lihat</a>
                      <?php }?>
                    </td>
                    <td><?php if($user->paraf != ""){?>
                      <a href="<?php echo base_url('uploads/qr_code/'.$user->qr_code) ?>">lihat</a>
                      <?php }?>
                    </td>
                    <td>
                      <a href="<?php echo site_url('KasubagTu/edituser/'.$user->NIP);?>" class="btn btn-small"><i class="ri-pencil-fill"></i></a>
                      <a href="<?php echo site_url('KasubagTu/deleteuser/'.$user->NIP);?>" class="btn btn-small" ><i class="ri-delete-bin-6-line"></i></a>
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

  <?php $this->load->view('KasubagTu/_partials/Footer') ?>

</body>

</html>