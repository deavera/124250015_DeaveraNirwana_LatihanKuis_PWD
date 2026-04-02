<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Komunitas Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="ubah.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Komunitas Kucing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="design.php">Design</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="login">
    <div class="pendaftaran">
        <h3>Pendaftaran Komunitas Kucing</h3>
    </div>

    
<div class="row justify-content-center">
    <div class="col-7">    
      <form method ="POST" action="proses_login.php" class="form">
      <div class="row mb-3">
        <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
      </div>
      <hr>

      <div class="row mb-3">
        <label for="tgl_lahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-6">
          <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir" required>
        </div>
      </div>
      <hr>

      <div class="row mb-3">
        <label for="umur" class="col-sm-6 col-form-label">Kelompok Umur</label>
        <div class="col-sm-6">
          <select class="form-select" id="umur" name="kelompok_umur" required>
            <option value="">Pilih Kelompok Umur</option>
            <option value="Anak-anak">Anak-anak</option>
            <option value="Remaja">Remaja</option>
            <option value="Dewasa">Dewasa</option>
            <option value="Lansia">Lansia</option>
          </select>
        </div>
      </div>
      <hr>

      <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-6 pt-0">Jenis Kelamin</legend>
        <div class="col-sm-6">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1" value="Laki-laki" required>
            <label class="form-check-label" for="jenis_kelamin">
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="Perempuan" required >
            <label class="form-check-label" for="jenis_kelamin">
              Perempuan
            </label>
          </div>
        </div>
      </fieldset>
      <hr>

      <div class="row mb-3">
      <label for="hobi" class="col-sm-6 col-form-label">Hobi</label>
      <div class="col-sm-6">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hobi[]" id="gridCheck1" value="Main Game">
          <label class="form-check-label" for="gridCheck1">
            Main Game
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hobi[]" id="gridCheck2" value="Ngoding">
          <label class="form-check-label" for="gridCheck2">
            Ngoding
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="hobi[]" id="gridCheck3" value="Bermain bersama kucing">
          <label class="form-check-label" for="gridCheck3">
            Bermain bersama kucing
          </label>
        </div>
      </div>
    </div>
    <hr>

    <div class="row mb-3">
      <label for="asal_daerah" class="col-sm-6 col-form-label">Asal Daerah</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="asal_daerah" name="asal_daerah" required>
      </div>
    </div>
    <hr>

    <div class="row mb-3">
      <label for="alasan" class="col-sm-6 col-form-label">Alasan Ingin Bergabung</label>
      <div class="col-sm-6">
        <textarea class="form-control" id="alasan" name="alasan" rows="3" required></textarea>
      </div>
    </div>
    <hr>

  <div class="button">
    <button type="submit" class="btn btn-success">KIRIM PENDAFTARAN</button>
  </div>

</form>

    </div>
  </section>
  </body>
</html>