<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffSeksi/_partials/Header') ?>
<?php $this->load->view('StaffSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Input Hasil Tindak Lanjut</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Surat Masuk</a></li>
          <li class="breadcrumb-item active">Input Hasil Tindak Lanjut</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Hasil Tindak Lanjut</h5>
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
                  <label for="id_disposisi" class="col-sm-2 col-form-label">Id Disposisi</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control <?php echo form_error('id_disposisi') ? 'is-invalid':'' ?>" name="id_disposisi" value="<?php echo $tindak_lanjut->id_disposisi;?>">
                    <div class="invalid-feedback"><?php echo form_error('id_disposisi') ?></div>
                  </div>
                </div>

              <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>" name="nomor_surat" value="<?php echo $tindak_lanjut->nomor_surat;?>">
                    <div class="invalid-feedback"><?php echo form_error('nomor_surat') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>" name="perihal" value="<?php echo $tindak_lanjut->perihal?>">
                    <div class="invalid-feedback"><?php echo form_error('perihal') ?></div>
                  </div>
                </div>

                 <div class="row mb-3">
                   <label for="isi_ringkasan" class="col-sm-2 col-form-label">Isi Ringkasan</label>
                  <div class="col-sm-10">
                    <textarea readonly class="form-control <?php echo form_error('isi_ringkasan') ? 'is-invalid':'' ?>" id ="isi_ringkasan" name="isi_ringkasan" ><?php echo $tindak_lanjut->ringkasan_isi ?></textarea>
                    <div class="invalid-feedback"><?php echo form_error('isi_ringkasan') ?></div>
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" name="keterangan">
                    <div class="invalid-feedback"><?php echo form_error('keterangan') ?></div>
                  </div>
                </div>

              <div class="row mb-3">
                  <label for="lampiran" class="col-sm-2 col-form-label">lampiran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('lampiran') ? 'is-invalid':'' ?>" name="lampiran" readonly value="<?php echo $tindak_lanjut->lampiran?>">
                    <div class="invalid-feedback"><?php echo form_error('lampiran') ?></div>
                  </div>
                </div>
              

                 <div class="row mb-3">
                   <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date" readonly class="form-control <?php echo form_error('tanggal_masuk') ? 'is-invalid':'' ?>"  id ="tanggal_masuk" name="tanggal_masuk" value="<?php echo $tindak_lanjut->tgl_masuk ?>">
                    <div class="invalid-feedback"><?php echo form_error('tanggal_masuk') ?></div>
                </div>
              </div>

               <div class="row mb-3">
                  <label for="kepada" class="col-sm-2 col-form-label">Kepada</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('kepada') ? 'is-invalid':'' ?>" name="kepada" readonly value="<?php echo $tindak_lanjut->kepada?>">
                    <div class="invalid-feedback"><?php echo form_error('kepada') ?></div>
                  </div>
                </div>
                
                <div class="row mb-3">
                   <label for="dibuat_oleh" class="col-sm-2 col-form-label">Dibuat oleh</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dibuat_oleh') ? 'is-invalid':'' ?>"  id ="dibuat_oleh" name="dibuat_oleh">
                    <div class="invalid-feedback"><?php echo form_error('dibuat_oleh') ?></div>
                </div>
                </div>
                <div class="row mb-3">
                   <label for="hasil" class="col-sm-2 col-form-label">hasil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('hasil') ? 'is-invalid':'' ?>" name="hasil">
                    <div class="invalid-feedback"><?php echo form_error('hasil') ?></div>
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