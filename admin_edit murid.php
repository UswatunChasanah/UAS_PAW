<?php
session_start();

if ($_SESSION['level'] != 'admin' || empty($_SESSION['login'])) {
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
  <title>Tambah Data Murid | TK Dharma Wanita</title>
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
      background-image: url('bg.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%;">
    <h3 class="w3-bar-item">Admin</h3>
    <a href="home admin.php" class="w3-bar-item w3-button">Dashboard</a>
    <a href="admin_data murid.php" class="w3-bar-item w3-button">Data Murid</a>
    <a href="admin_data murid a.php" class="w3-bar-item w3-button">Data Murid A</a>
    <a href="admin_data murid b.php" class="w3-bar-item w3-button">Data Murid B</a>
    <a href="admin_data guru.php" class="w3-bar-item w3-button">Data Guru</a>
    <a href="admin_tambah murid.php" class="w3-bar-item w3-button">Tambah Data Murid</a>
    <a href="admin_tambah guru.php" class="w3-bar-item w3-button">Tambah Data Guru</a>
    <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  </div>

  <!-- Page Content -->
  <div style="margin-left:15%">

    <div class="shadow mb-3 bg-body rounded">
      <div class="w3-container" style="background-color: rgb(19, 110, 155); color:white;">
        <h1>TK DHARMA WANITA BALONGREJO</h1>
      </div>
    </div>

    <div class="container mt-2">
      <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-3 pb-2 pb-md-0 mb-md-5">Tambah Data Murid</h3>

                  <?php
                  include "koneksi.php";

                  $id = $_GET["id_murid"];

                  $sql = "SELECT * FROM murid WHERE id_murid = '$id'";
                  $hasil = mysqli_query($koneksi, $sql);
                  if (!$hasil) {
                    echo "Edit gagal";
                  }
                  while ($row = mysqli_fetch_array($hasil)) {
                  ?>
                    <form method="POST" action="edit murid.php">
                      <input type="hidden" name="id_murid" value="<?php echo $row["id_murid"] ?>">
                      <div class="row">
                        <div class="col mb-2">

                          <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" name="nama_murid" value="<?php echo $row["nama_murid"] ?>" />
                            <label class="form-label" for="firstName">Nama Lengkap Anak</label>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-2 d-flex align-items-center">

                          <div class="form-outline datepicker w-100">
                            <input type="date" class="form-control form-control-lg" id="birthdayDate" name="tgl_lahir_murid" value="<?php echo $row["tgl_lahir_murid"] ?>" />
                            <label for="birthdayDate" class="form-label">Tanggal Lahir</label>
                          </div>

                        </div>
                        <div class="col-md-6 mb-2">

                          <h6 class="mb-2 pb-1">Gender: </h6>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_murid" id="femaleGender" value="Laki-laki" checked />
                            <label class="form-check-label" for="femaleGender">Laki-laki</label>
                          </div>

                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender_murid" id="maleGender" value="Perempuan" />
                            <label class="form-check-label" for="maleGender">Perempuan</label>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-2 pb-2">

                          <div class="form-outline">
                            <input type="text" id="emailAddress" class="form-control form-control-lg" name="nama_ayah" value="<?php echo $row["nama_ayah"] ?>" />
                            <label class="form-label" for="emailAddress">Nama Ayah</label>
                          </div>

                        </div>
                        <div class="col-md-6 mb-2 pb-2">

                          <div class="form-outline">
                            <input type="text" id="phoneNumber" class="form-control form-control-lg" name="nama_ibu" value="<?php echo $row["nama_ibu"] ?>" />
                            <label class="form-label" for="phoneNumber">Nama Ibu</label>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col mb-2">

                          <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" name="alamat" value="<?php echo $row["alamat"] ?>" />
                            <label class="form-label" for="firstName">Alamat</label>
                          </div>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-2 pb-2">

                          <div class="form-outline">
                            <input type="text" id="emailAddress" class="form-control form-control-lg" name="no_tlp_ortu" value="<?php echo $row["no_tlp_ortu"] ?>" />
                            <label class="form-label" for="emailAddress">Nomor Telpon Orang Tua</label>
                          </div>

                        </div>
                        <div class="col-md-6 mb-2 pb-2">
                          <h6 class="mb-2 pb-1">Kelas</h6>
                          <select class="select" name="kelas" value="<?php echo $row["kelas"] ?>">
                            <option value="1" disabled>Kelas</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                          </select>

                        </div>
                      </div>
                      <div class="row mb-2 pb-2 pb-md-0 mb-md-5">
                        <div class="col-md-6">

                          <div class="form-outline">
                            <input type="file" id="form3Example1w" class="form-control" name="foto" value="<?php echo $row["foto"] ?>" />
                            <label class="form-label" for="form3Example1w">Upload Foto Anak</label>
                          </div>

                        </div>
                      </div>

                      <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                      </div>
                    </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>
</body>

</html>