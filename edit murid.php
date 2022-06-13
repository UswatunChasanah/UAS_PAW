<?php
include "koneksi.php";

$id = $_POST["id_murid"];
$nama = $_POST["nama_murid"];
$lahir = $_POST["tgl_lahir_murid"];
$gender = $_POST["gender_murid"];
$ayah = $_POST["nama_ayah"];
$ibu = $_POST["nama_ibu"];
$tlp = $_POST["no_tlp_ortu"];
$alamat = $_POST["alamat"];
$kelas = $_POST["kelas"];
$foto = $_POST["foto"];

$sql = "UPDATE murid SET nama_murid = '$nama', tgl_lahir_murid = '$lahir', gender_murid = '$gender', nama_ayah = '$ayah', nama_ibu = '$ibu', no_tlp_ortu = '$tlp', alamat = '$alamat', kelas = '$kelas', foto = '$foto' WHERE id_murid = '$id'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal diedit'); document.location.href='admin_data murid.php';</script>";
} else {
  echo "<script> alert('Data berhasil diedit'); document.location.href='admin_data murid.php';</script>";
}
