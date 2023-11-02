<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Surat Masuk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item "><a href="#">Surat Masuk & Disposisi</a></li>

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Data Surat Masuk</h5>
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
              <form action="<?php echo site_url('StaffTu/tambahsuratmasuk') ?>" method="post" enctype="multipart/form-data"> 
                <div class="row mb-3">
                  <label for="kode" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>" name="kode">
            
                    <div class="invalid-feedback"><?php echo form_error('kode') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                   <label for="nama_instansi" class="col-sm-2 col-form-label">Nama Instansi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('nama_instansi') ? 'is-invalid':'' ?>" id ="nama_instansi" name="nama_instansi">
                    <div class="invalid-feedback"><?php echo form_error('nama_instansi') ?></div>
                  </div>
              </div>
              <div class="row mb-3">
                  <label for="dari" class="col-sm-2 col-form-label">Dari</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dari') ? 'is-invalid':'' ?>" name="dari">
                    <div class="invalid-feedback"><?php echo form_error('dari') ?></div>
                  </div>
                </div>
              <div class="row mb-3">
                  <label for="kepada" class="col-sm-2 col-form-label">Kepada</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('kepada') ? 'is-invalid':'' ?>" name="kepada">
                    <div class="invalid-feedback"><?php echo form_error('kepada') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                   <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>"  id ="tgl" name="tgl">
                    <div class="invalid-feedback"><?php echo form_error('tgl') ?></div>
                </div>
              </div>
                 <div class="row mb-3">
                   <label for="perihal" class="col-sm-2 col-form-label">perihal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>" id ="perihal" name="perihal" >
                    <div class="invalid-feedback"><?php echo form_error('perihal') ?></div>
                  </div>
              </div>   
                <div class="row mb-3">
                   <label for="lampiran" class="col-sm-2 col-form-label">lampiran</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control <?php echo form_error('lampiran') ? 'is-invalid':'' ?>" name="lampiran">
                    <div class="invalid-feedback"><?php echo form_error('lampiran') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="isi_surat" class="col-sm-2 col-form-label">isi surat</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control <?php echo form_error('isi_surat') ? 'is-invalid':'' ?>" name="isi_surat"></input>
                    <div class="invalid-feedback"><?php echo form_error('isi_surat') ?></div>
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