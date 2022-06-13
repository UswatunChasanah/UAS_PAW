<?php
include "koneksi.php";

$id = $_GET["id_murid"];

$sql = "DELETE FROM murid WHERE id_murid = '$id'";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil) {
  echo "<script> alert('Data gagal dihapus')</script>";
} else {
  echo "<script> alert('Data berhasil dihapus')</script>";
}
