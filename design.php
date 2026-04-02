<?php
session_start();
if (!isset($_SESSION['Loged_in']) || $_SESSION['Loged_in'] !== true) {
    header('Location: login.php');
    exit();
}
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
            <a class="nav-link" href="login.php">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="design.php">Design</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<section class="design">
    <div class="judul">
        <h1>Design Laboratory</h1>
    </div>

    <div class="bawah">
        <h6>Image Effects</h6>
        <img src="kucing.png" alt="Gambar Kucing">
    </div>   
</section>

  </body>
</html>