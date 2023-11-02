<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('KepalaSeksi/_partials/Head.php') ?>

<body>
<?php $this->load->view('KepalaSeksi/_partials/Header') ?>
<?php $this->load->view('KepalaSeksi/_partials/Sidebar') ?>

  <main id="main" class="main">
  <div class="pagetitle">
      <h1>Persetujuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Persetujuan</a></li>
          <li class="breadcrumb-item active">Persetujuan disposisi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Persetujuan Disposisi</h5>
              <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
<?php echo validation_errors(); ?>
              <!-- General Form Elements -->
              <form action="" method="post" enctype="multipart/form-data"> 
              <input type="hidden" value="<?php echo $acc->id_disposisi?>" name="id_disposisi">
              
                   <div class="row mb-3">
                  <label for="acc" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                     <select class="form-select" aria-label="Default select example" name="acc">
                      <option value="1">ACC</option>
                      <option value="2">Tidak ACC</option>

                    </select>
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
<?php $this->load->view('KepalaSeksi/_partials/Footer') ?>

</body>

</html>