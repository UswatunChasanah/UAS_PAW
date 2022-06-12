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
  <title>Data Murid | TK Dharma Wanita</title>
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
  </style>
</head>

<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%;">
    <h3 class="w3-bar-item">Admin</h3>
    <a href="home guru.php" class="w3-bar-item w3-button">Dashboard</a>
    <a href="guru_data_murid.php" class="w3-bar-item w3-button">Data Murid</a>
    <a href="guru_data_murid.php" class="w3-bar-item w3-button">Data Murid A</a>
    <a href="guru_data_murid.php" class="w3-bar-item w3-button">Data Murid B</a>
    <a href="#" class="w3-bar-item w3-button">Tambah Data Murid</a>
    <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>

  <div style="margin-left:15%">

    <div class="shadow mb-3 bg-body rounded">
      <div class="w3-container" style="background-color: rgb(19, 110, 155); color:white;">
        <h1>TK DHARMA WANITA BALONGREJO</h1>
      </div>
    </div>

    <div class="container mt-2">
      <table class="table table-hover" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Gender</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          include "koneksi.php";
          $sql = "SELECT * FROM murid";
          $hasil = mysqli_query($koneksi, $sql);
          $no = 1;

          while ($row = mysqli_fetch_array($hasil)) {
          ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $row["id_murid"]; ?></td>
              <td><?php echo $row["nama_murid"]; ?></td>
              <td><?php echo $row["tgl_lahir_murid"]; ?></td>
              <td><?php echo $row["gender_murid"]; ?></td>
              <td><?php echo $row["kelas"]; ?></td>
              <td>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-primary">Show Detail</button>
              </td>
            </tr>

          <?php $no += 1;
          } ?>
        </tbody>
      </table>
    </div>

  </div>
</body>

</html>