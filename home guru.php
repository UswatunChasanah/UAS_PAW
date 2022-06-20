<?php
session_start();

if ($_SESSION['level'] != 'guru' || empty($_SESSION['login'])) {
  header('location:login.php');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Home Guru | TK Dharma Wanita</title>
  <style>
    h5,
    h1 {
      text-align: center;
      font-weight: bold;
      color: white;
    }

    p {
      text-align: center;
      color: white;
    }

    body {
      background-image: url('bgguru.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%;">
    <h3 class="w3-bar-item">Guru</h3>
    <a href="home guru.php" class="w3-bar-item w3-button">Dashboard</a>
    <a href="guru_data_murid.php" class="w3-bar-item w3-button">Data Murid</a>
    <a href="guru_data_murid a.php" class="w3-bar-item w3-button">Data Murid A</a>
    <a href="guru_data_murid b.php" class="w3-bar-item w3-button">Data Murid B</a>
    <a href="guru_tambah_murid.php" class="w3-bar-item w3-button">Tambah Data Murid</a>
    <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>

  <!-- Page Content -->
  <div style="margin-left:15%">

    <div class="shadow mb-3 bg-body rounded">
      <div class="w3-container" style="background-color:blueviolet; color:white;">
        <h1>TK DHARMA WANITA BALONGREJO</h1>
      </div>
    </div>

    <div class="container mt-2">
      <div class="row">
        <div class="col mt-5">
          <div class="card" style="width: 23rem; background-color:rgb(60, 179, 113)">
            <div class="card-body">
              <h5 class="card-title">Data Murid</h5>
              <h1>
                <?php
                include "koneksi.php";

                $sql = "SELECT * FROM murid;";
                $hasil = mysqli_query($koneksi, $sql);
                $jumlah = mysqli_num_rows($hasil);
                echo $jumlah;
                ?>
              </h1>
              <p>Murid</p>
            </div>
          </div>
        </div>
        <div class="col mt-5">
          <div class="card" style="width: 23rem; background-color:rgb(30, 144, 255)">
            <div class="card-body">
              <h5 class="card-title">Data Kelas A</h5>
              <h1>
                <?php
                include "koneksi.php";

                $sql = "SELECT * FROM murid WHERE kelas = 'A'";
                $hasil = mysqli_query($koneksi, $sql);
                $jumlah = mysqli_num_rows($hasil);
                echo $jumlah;
                ?>
              </h1>
              <p>Murid</p>
            </div>
          </div>
        </div>
        <div class="col mt-5">
          <div class="card" style="width: 23rem; background-color:rgb(252, 165, 3)">
            <div class="card-body">
              <h5 class="card-title">Data Kelas B</h5>
              <h1>
                <?php
                include "koneksi.php";

                $sql = "SELECT * FROM murid WHERE kelas = 'B'";
                $hasil = mysqli_query($koneksi, $sql);
                $jumlah = mysqli_num_rows($hasil);
                echo $jumlah;
                ?>
              </h1>
              <p>Murid</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col shadow p-3 mb-5 bg-body rounded">
            <div class="row">
              <div class="col">
                <h4>Perempuan</h4>
                <h1 style="color:black; text-align:left;">
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM murid WHERE gender_murid = 'Perempuan'";
                  $hasil = mysqli_query($koneksi, $sql);
                  $jumlah = mysqli_num_rows($hasil);
                  echo $jumlah;
                  ?>
                </h1>
              </div>
              <div class="col">
                <img src="cewek.png" alt="" width="300">
              </div>
            </div>
          </div>
          <div class="col shadow p-3 mb-5 bg-body rounded">
            <div class="row">
              <div class="col">
                <h4>Laki-laki</h4>
                <h1 style="color:black; text-align:left;">
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM murid WHERE gender_murid = 'Laki-laki' ";
                  $hasil = mysqli_query($koneksi, $sql);
                  $jumlah = mysqli_num_rows($hasil);
                  echo $jumlah;
                  ?>
                </h1>
              </div>
              <div class="col">
                <img src="cowok.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>