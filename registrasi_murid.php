<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>TK Dharma Wanita | Pendaftaran</title>
  <style>
    body {
      background-image: url('bg.jpg');
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="shadow mb-5 bg-body rounded">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(19, 110, 155)">
      <div class="container-fluid">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="navbar-brand">
                TK Dharma Wanita
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="eksplore.php">Eksplore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li>
            </ul>
            <span class="navbar-item navbar-nav mb-2 mb-lg-0">
              <a class="nav-link" href="login.php">Login</a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="container mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="header regis.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Formulir Pendaftaran</h3>

            <form class="px-md-2" method="POST" action="insert_murid.php">

              <div class="form-outline mb-2">
                <input type="text" id="form3Example1q" class="form-control" name="nama_murid" />
                <label class="form-label" for="form3Example1q">Nama Lengkap Anak</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline datepicker">
                    <input type="date" class="form-control" id="exampleDatepicker1" name="tgl_lahir_murid" />
                    <label for="exampleDatepicker1" class="form-label">Tangggal Lahir</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <select class="select" name="gender_murid">
                    <option value="1" disabled>Gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" name="nama_ayah" />
                    <label for="exampleDatepicker1" class="form-label">Nama Ayah</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" name="nama_ibu" />
                    <label for="exampleDatepicker1" class="form-label">Nama Ibu</label>
                  </div>

                </div>
              </div>

              <div class="form-outline mb-2">
                <input type="text" id="form3Example1q" class="form-control" name="alamat" />
                <label class="form-label" for="form3Example1q">Alamat</label>
              </div>



              <div class="row">
                <div class="col-md-6 mb-2">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" name="no_tlp_ortu" />
                    <label for="exampleDatepicker1" class="form-label">Nomor Telpon Orang Tua</label>
                  </div>

                </div>
                <div class="col-md-6 mb-2">

                  <select class="select" name="kelas">
                    <option value="1" disabled>Kelas</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                  </select>

                </div>
              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div class="form-outline">
                    <input type="file" id="form3Example1w" class="form-control" name="foto" />
                    <label class="form-label" for="form3Example1w">Upload Foto Anak</label>
                  </div>

                </div>
              </div>

              <button type="submit" class="btn btn-info btn-lg mb-1" style="background-color: rgb(19, 110, 155); color:white">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>