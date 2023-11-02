<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Input Disposisi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Surat Masuk</li>
          <li class="breadcrumb-item active">Input Disposisi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Disposisi</h5>
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
                  <label for="kode" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>" name="kode" value="<?php echo $DS->kode?>">
                    <input type="hidden" name="id_disposisi">
                    <div class="invalid-feedback"><?php echo form_error('kode') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Indeks</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('indeks') ? 'is-invalid':'' ?>" name="indeks" >
                    <input type="hidden" name="id_disposisi">
                    <div class="invalid-feedback"><?php echo form_error('indeks') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
                  <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example"  name="klasifikasi">
                      <option value="biasa">Biasa</option>
                      <option value="penting">Penting</option>
                    </select>
                    <div class="invalid-feedback"><?php echo form_error('klasifikasi') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                   <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date" readonly class="form-control <?php echo form_error('tgl_masuk') ? 'is-invalid':'' ?>" id ="tgl_masuk" name="tgl_masuk" value="<?php echo $DS->tgl?>">
                    <div class="invalid-feedback"><?php echo form_error('tgl_masuk') ?></div>
                  </div>
              </div>
                
               <div class="row mb-3">
                  <label for="tgl_penyelesaian" class="col-sm-2 col-form-label">Tanggal Penyelesaian</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control <?php echo form_error('tgl_penyelesaian') ? 'is-invalid':'' ?>" name="tgl_penyelesaian">
                    <div class="invalid-feedback"><?php echo form_error('tgl_penyelesaian') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Tanggal Pembuatan Surat</label>
                 
                  <div class="col-md-10">
                    <input type="date" class="form-control <?php echo form_error('tgl_buat') ? 'is-invalid':'' ?>" name="tgl_buat">
                    <div class="invalid-feedback"><?php echo form_error('tgl_buat') ?></div>
                  <input type="hidden" readonly class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>" name="nomor_surat" value="<?php echo $DS->nomor_surat ?>">
                    <div class="invalid-feedback"><?php echo form_error('nomor_surat') ?></div>
                  </div>
                  </div>
                
                  <div class="row mb-3">
                  <label for="dari" class="col-sm-2 col-form-label">dari</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control <?php echo form_error('dari') ? 'is-invalid':'' ?>" name="dari" value="<?php echo $DS->dari ?>">
                    <div class="invalid-feedback"><?php echo form_error('dari') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="ringkasan_isi" class="col-sm-2 col-form-label">Ringkasan Isi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control <?php echo form_error('ringkasan_isi') ? 'is-invalid':'' ?>" name="ringkasan_isi"></textarea>
                    <div class="invalid-feedback"><?php echo form_error('ringkasan_isi') ?></div>
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="disposisi_kakanim" class="col-sm-2 col-form-label">Disposisi Kakanim</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('disposisi_kakanim') ? 'is-invalid':'' ?>" name="disposisi_kakanim">
                    <div class="invalid-feedback"><?php echo form_error('disposisi_kakanim') ?></div>
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="diteruskan_kepada" class="col-sm-2 col-form-label">Diteruskan Kepada</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example"  name="diteruskan_kepada">
                      <option value="Kasubag TU">Kasubag TU</option>
                      <option value="Kasi Pelayanan Verifikasi dan Doklain">Kasi Pelayanan Verifikasi dan Doklain</option>
                      <option value="Kasi Instaltuskim">Kasi Instaltuskim</option>
                      <option value="Kasi Inteldakim">Kasi Inteldakim</option>
                      <option value="Kasi Tek.Inkomin">Kasi Tek.Inkomin</option>
                    </select>
                    <div class="invalid-feedback"><?php echo form_error('diteruskan_kepada') ?></div>
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