<?php
include "koneksi.php";

$nip = $_GET["NIP"];

$sql = "DELETE FROM guru WHERE NIP = '$nip'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal dihapus'); document.location.href='admin_data guru.php';</script>";
} else {
  echo "<script> alert('Data berhasil dihapus'); document.location.href='admin_data guru.php';</script>";
}
