<?php
include "koneksi.php";
$nip = $_POST["NIP"];
$nama = $_POST["nama_guru"];
$lahir = $_POST["tgl_lahir_guru"];
$alamat = $_POST["alamat"];
$tlp = $_POST["nomor_tlp_guru"];
$kelas = $_POST["kelas"];
$foto = $_POST["foto"];

$sql = "INSERT INTO guru VALUES ('$nip','$nama','$lahir','$alamat','$tlp','$kelas','$foto')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal ditambahkan')</script>";
} else {
  echo "<script> alert('Data berhasil ditambahkan')</script>";
}
