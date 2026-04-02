<?php
session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$kelompok_umur = $_POST['kelompok_umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobi = isset($_POST['hobi']) ? implode(', ', $_POST['hobi']) : '-';
$asal_daerah = $_POST['asal_daerah'];
$alasan = $_POST['alasan'];

$query = "INSERT INTO pendaftaran (nama, tanggal_lahir, kelompok_umur,jenis_kelamin, hobi, asal_daerah, alasan) VALUES ('$nama', '$tanggal_lahir', '$kelompok_umur', '$jenis_kelamin', '$hobi', '$asal_daerah', '$alasan')";

mysqli_query($koneksi, $query);
$_SESSION['Loged_in'] = true;
header('Location: design.php');
exit();
?>