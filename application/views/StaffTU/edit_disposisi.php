<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('StaffTu/_partials/Head.php') ?>

<body>
<?php $this->load->view('StaffTu/_partials/Header') ?>
<?php $this->load->view('StaffTu/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Edit Data Disposisi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item "><a href="#">Surat Masuk</a></li>
          <li class="breadcrumb-item "> Data Surat Masuk & Disposisi</li>
          <li class="breadcrumb-item"><a href="#">Data Disposisi</a></li>
          <li class="breadcrumb-item ">Edit Data Disposisi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Disposisi</h5>
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
                    <input type="text" class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>"  id ="kode" name="kode" value="<?php echo $Disposisi->kode?>">
                    <div class="invalid-feedback"><?php echo form_error('kode') ?></div>
                </div>
              </div>
                <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Indeks</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('indeks') ? 'is-invalid':'' ?>" name="indeks" value="<?php echo $Disposisi->indeks?>">
                    <input type="hidden" name="id_disposisi" value="<?php echo $Disposisi->id_disposisi?>">
                    <input type="hidden" name="nomor_surat" value="<?php echo $Disposisi->nomor_surat?>">
                    <div class="invalid-feedback"><?php echo form_error('indeks') ?></div>
                  </div>
                </div>

                <div class="row mb-3">
                   <label for="klasifikasi" class="col-sm-2 col-form-label">Klasifikasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('klasifikasi') ? 'is-invalid':'' ?>" name="klasifikasi" value="<?php echo $Disposisi->klasifikasi?>">
                    <div class="invalid-feedback"><?php echo form_error('klasifikasi') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                   <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                    <input type="date"  class="form-control <?php echo form_error('tgl_masuk') ? 'is-invalid':'' ?>" id ="tgl_masuk" name="tgl_masuk" value="<?php echo $Disposisi->tgl_masuk?>">
                    <div class="invalid-feedback"><?php echo form_error('tgl_masuk') ?></div>
                  </div>
              </div>
              
               <div class="row mb-3">
                  <label for="tgl_penyelesaian" class="col-sm-2 col-form-label">Tanggal Penyelesaian</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control <?php echo form_error('tgl_penyelesaian') ? 'is-invalid':'' ?>" name="tgl_penyelesaian" value="<?php echo $Disposisi->tgl_penyelesaian?>">
                    <div class="invalid-feedback"><?php echo form_error('tgl_penyelesaian') ?></div>
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="nomor_surat" class="col-sm-2 col-form-label">Tanggal Pembuatan</label>
                 
                  <div class="col-md-10">
                    <input type="date" class="form-control <?php echo form_error('tgl_buat') ? 'is-invalid':'' ?>" name="tgl_buat" value="<?php echo $Disposisi->tgl_buat?>">
                    <div class="invalid-feedback"><?php echo form_error('tgl_buat') ?></div>
                  </div>
                  </div>
                
                  <div class="row mb-3">
                  <label for="dari" class="col-sm-2 col-form-label">dari</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('dari') ? 'is-invalid':'' ?>" name="dari" value="<?php echo $Disposisi->dari?>">
                    <div class="invalid-feedback"><?php echo form_error('dari') ?></div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="ringkasan_isi" class="col-sm-2 col-form-label">Ringkasan Isi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control <?php echo form_error('ringkasan_isi') ? 'is-invalid':'' ?>" name="ringkasan_isi"><?php echo $Disposisi->ringkasan_isi?></textarea>
                    <div class="invalid-feedback"><?php echo form_error('ringkasan_isi') ?></div>
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="disposisi_kakanim" class="col-sm-2 col-form-label">Disposisi Kakanim</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control <?php echo form_error('disposisi_kakanim') ? 'is-invalid':'' ?>" name="disposisi_kakanim" value="<?php echo $Disposisi->disposisi_kakanim?>">
                    <div class="invalid-feedback"><?php echo form_error('disposisi_kakanim') ?></div>
                  </div>
                </div>
                  <div class="row mb-3">
                  <label for="diteruskan_kepada" class="col-sm-2 col-form-label">Diteruskan Kepada</label>
                  <div class="col-sm-10">
            
                    <select class="form-select" aria-label="Default select example"  name="diteruskan_kepada">
                      <option value="Kasubag TU" <?php if($Disposisi->diteruskan_kepada == "Kasubag TU") {echo "selected";} ?>>Kasubag TU</option>
                      <option value="Kasi Pelayanan Verifikasi dan Doklain" <?php if($Disposisi->diteruskan_kepada == "Kasi Pelayanan Verifikasi dan Doklain") {echo "selected";} ?>>Kasi Pelayanan Verifikasi dan Doklain</option>
                      <option value="Kasi Instaltuskim" <?php if($Disposisi->diteruskan_kepada == "Kasi Instaltuskim") {echo "selected";} ?>>Kasi Instaltuskim</option>
                      <option value="Kasi Inteldakim" <?php if($Disposisi->diteruskan_kepada == "Kasi Inteldakim") {echo "selected";} ?>>Kasi Inteldakim</option>
                      <option value="Kasi Tek.Inkomin" <?php if($Disposisi->diteruskan_kepada == "Kasi Tek.Inkomin") {echo "selected";} ?>>Kasi Tek.Inkomin</option>
                    </select>
                    <div class="invalid-feedback"><?php echo form_error('diteruskan_kepada') ?></div>
                    <?php if($Disposisi->status_kepala_kantor == 2){ ?>
                      <input type="hidden" name="status_kepala_kantor" value="0">
                   <?php } else { ?>
                    <input type="hidden" name="status_kepala_kantor" value="<?php echo $Disposisi->status_kepala_kantor ?>">
                   <?php } 
                          if($Disposisi->status_kepala_seksi == 2){ ?>
                      <input type="hidden" name="status_kepala_seksi" value="0">
                   <?php } else { ?>
                    <input type="hidden" name="status_kepala_seksi" value="<?php echo $Disposisi->status_kepala_seksi ?>">
                   <?php } 
                          if($Disposisi->status_kasubag_tu == 2){ ?>
                      <input type="hidden" name="status_kasubag_tu" value="0">
                   <?php } else { ?>
                    <input type="hidden" name="status_kasubag_tu" value="<?php echo $Disposisi->status_kasubag_tu ?>">
                   <?php } ?>
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