<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Edit Data Surat Keluar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Data Surat</a></li>
          <li class="breadcrumb-item active">Edit Data Surat Keluar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Pegawai</h5>
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
                  <label for="jenis_surat" class="col-sm-2 col-form-label">Jenis Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('jenis_surat') ? 'is-invalid':'' ?>" name="jenis_surat" value="<?php echo $surat->jenis_surat ?>">
                    <input type="hidden" name="id_template" value="<?php echo $surat->id_template ?>">
                    <div class="invalid-feedback"><?php echo form_error('jenis_surat') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="nomor_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>" name="nomor_surat" value="<?php echo $surat->nomor_surat ?>">
                    <div class="invalid-feedback"><?php echo form_error('nomor_surat') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                   <label for="lampiran" class="col-sm-2 col-form-label">lampiran</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('lampiran') ? 'is-invalid':'' ?>" id ="lampiran" name="lampiran" value="<?php echo $surat->lampiran ?>">
                    <div class="invalid-feedback"><?php echo form_error('lampiran') ?></div>
                  </div>
              </div>
              <div class="row mb-3">
                  <label for="perihal" class="col-sm-2 col-form-label">perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dari') ? 'is-invalid':'' ?>" name="perihal" value="<?php echo $surat->perihal ?>">
                    <div class="invalid-feedback"><?php echo form_error('perihal') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                   <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control <?php echo form_error('tgl') ? 'is-invalid':'' ?>"  id ="tgl" name="tgl" value="<?php echo $surat->tgl ?>">
                    <div class="invalid-feedback"><?php echo form_error('tgl') ?></div>
                </div>
              </div>
             
                 <div class="row mb-3">
                  <label for="dari" class="col-sm-2 col-form-label">dari</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dari') ? 'is-invalid':'' ?> " name="dari" value="<?php echo $surat->dari ?>"></input>
                    <div class="invalid-feedback"><?php echo form_error('dari') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="kepada" class="col-sm-2 col-form-label">kepada</label>
                  <div class="col-sm-10">
                    <textarea class="form-control <?php echo form_error('kepada') ? 'is-invalid':'' ?>"  name="kepada" id="kepada" onkeypress="CheckLength();"> <?php echo $surat->kepada ?></textarea>
                    <div class="invalid-feedback"><?php echo form_error('kepada') ?></div>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="isi_surat" class="col-sm-2 col-form-label ">isi_surat</label>
                  <div class="col-sm-10">
                    <textarea class=" <?php echo form_error('isi_surat') ? 'is-invalid':'' ?> tinymce-editor" name="isi_surat" ><?php echo $surat->isi_surat ?> </textarea>
                    <div class="invalid-feedback"><?php echo form_error('isi_surat') ?>
                    <input type="hidden" name="status_kepala_seksi" value="<?php echo $surat->status_kepala_kantor ?>">
                    <input type="hidden" name="status_kepala_kantor" value="<?php echo $surat->status_kepala_seksi ?>">
                  </div>
                  </div>
    
                  <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    
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
<?php $this->load->view('StaffTu/_partials/Footer') ?>

</body>


</html>       