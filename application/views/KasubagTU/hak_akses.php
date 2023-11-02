<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('KasubagTU/_partials/Head.php') ?>

<body>
<?php $this->load->view('KasubagTU/_partials/Header') ?>
<?php $this->load->view('KasubagTU/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Tambah Hak akses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tambah Hak Akses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Data User</h5>
              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Divisi</th>
                    <th>Hak Akses</th>
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
                           ?><a href="<?php echo site_url('KasubagTu/tambah_hak_akses/'. $user->NIP);?>">Tambah</a>
                         <?php }
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
  <?php $this->load->view('KasubagTu/_partials/Footer') ?>

</body>

</html>