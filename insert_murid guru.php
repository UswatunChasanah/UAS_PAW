<?php
include "koneksi.php";
$nama = $_POST["nama_murid"];
$lahir = $_POST["tgl_lahir_murid"];
$gender = $_POST["gender_murid"];
$ayah = $_POST["nama_ayah"];
$ibu = $_POST["nama_ibu"];
$tlp = $_POST["no_tlp_ortu"];
$alamat = $_POST["alamat"];
$kelas = $_POST["kelas"];
$foto = $_POST["foto"];

$sql = "INSERT INTO murid VALUES (NULL,'$nama','$lahir','$gender','$ayah','$ibu','$tlp','$alamat','$kelas','$foto')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal ditambahkan'); document.location.href='guru_data_murid.php';</script>";
} else {
  echo "<script> alert('Data berhasil ditambahkan'); document.location.href='guru_data_murid.php';</script>";
}
