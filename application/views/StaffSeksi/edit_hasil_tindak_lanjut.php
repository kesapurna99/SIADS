<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Input Data Pegawai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Data Pegawai</a></li>
          <li class="breadcrumb-item active">Input Tindak Lanjut</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tindak Lanjut</h5>
              <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
          <?php if (isset($error)) : ?>
          <div class="invalid-feedback"><?= $error ?></div>
        <?php endif; ?>
        </div>
        <?php endif; ?>
<?php echo validation_errors(); ?>
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data"> 
                <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id_tanggapan" value="<?php echo $tindak_lanjut->id_tanggapan ?>">
                    <input type="text" class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>" name="nomor_surat" value="<?php echo $tindak_lanjut->nomor_surat;?>">
                    <div class="invalid-feedback"><?php echo form_error('nomor_surat') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>" name="perihal" value="<?php echo $tindak_lanjut->perihal?>">
                    <div class="invalid-feedback"><?php echo form_error('perihal') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                   <label for="isi_ringkasan" class="col-sm-2 col-form-label">Isi Ringkasan</label>
                  <div class="col-sm-10">
                    <textarea  class="form-control <?php echo form_error('isi_ringkasan') ? 'is-invalid':'' ?>" id ="isi_ringkasan" name="isi_ringkasan" ><?php echo $tindak_lanjut->isi_ringkasan ?></textarea>
                    <div class="invalid-feedback"><?php echo form_error('isi_ringkasan') ?></div>
                  </div>
              </div>
                <div class="row mb-3">
                   <label for="dibuat_oleh" class="col-sm-2 col-form-label">Dibuat oleh</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dibuat_oleh') ? 'is-invalid':'' ?>"  id ="dibuat_oleh" name="dibuat_oleh" value="<?php echo $tindak_lanjut->dibuat_oleh ?>">
                    <div class="invalid-feedback"><?php echo form_error('dibuat_oleh') ?></div>
                </div>
              </div>
               <div class="row mb-3">
                  <label for="kepada" class="col-sm-2 col-form-label">Kepada</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('kepada') ? 'is-invalid':'' ?>" name="kepada"  value="<?php echo $tindak_lanjut->kepada?>">
                    <div class="invalid-feedback"><?php echo form_error('kepada') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                   <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date"  class="form-control <?php echo form_error('tanggal_masuk') ? 'is-invalid':'' ?>"  id ="tanggal_masuk" name="tanggal_masuk" value="<?php echo $tindak_lanjut->tanggal_masuk ?>">
                    <div class="invalid-feedback"><?php echo form_error('tanggal_masuk') ?></div>
                </div>
              </div>
                <div class="row mb-3">
                   <label for="hasil" class="col-sm-2 col-form-label">hasil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('hasil') ? 'is-invalid':'' ?>" name="hasil" value="<?php echo $tindak_lanjut->hasil ?>">
                    <div class="invalid-feedback"><?php echo form_error('hasil') ?></div>
                  </div>
                </div>

              
               <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" name="keterangan" value="<?php echo $tindak_lanjut->keterangan ?>">
                    <div class="invalid-feedback"><?php echo form_error('keterangan') ?></div>
                <input type="hidden" name="status" value="<?php $tindak_lanjut->status ?>">  
                </div>
                </div>
              
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form>
             

  </main><!-- End #main -->
<?php $this->load->view('StaffSeksi/_partials/Footer') ?>

</body>

</html>       