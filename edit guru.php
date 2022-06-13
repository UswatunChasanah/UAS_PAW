<?php
include "koneksi.php";

$id = $_POST["id"];
$nip = $_POST["NIP"];
$nama = $_POST["nama_guru"];
$lahir = $_POST["tgl_lahir_guru"];
$alamat = $_POST["alamat"];
$tlp = $_POST["nomor_tlp_guru"];
$kelas = $_POST["kelas"];
$foto = $_POST["foto"];

$sql = "UPDATE guru SET NIP = '$nip', nama_guru = '$nama', tgl_lahir_guru = '$lahir', alamat = '$alamat', nomor_tlp_guru = '$tlp', kelas = '$kelas', foto = '$foto' WHERE id = '$id'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal diedit'); document.location.href='admin_data guru.php';</script>";
} else {
  echo "<script> alert('Data berhasil diedit'); document.location.href='admin_data guru.php';</script>";
}
