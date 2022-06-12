<?php
// session_start();

// if (isset($_SESSION['admin'])) {
//   header('location: ./home admin.php');
// } else if (isset($_SESSION['guru'])) {
//   header('location: ./home guru.php');
// }

// if (isset($_GET['pesan'])) {
//   if ($_GET['pesan'] == "gagal") {
//     echo '<script type ="text/JavaScript">';
//     echo 'alert("Login gagal! username dan password salah!")';
//     echo '</script>';
//   }
// }
// $usernameErr = $passwordErr = "";
// $username = $password = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["username"])) {
//     $usernameErr = "Username is required";
//   }
//   if (empty($_POST["password"])) {
//     $passwordErr = "Password is required";
//   }
// }

// 
?>

<!DOCTYPE html>
<html>

<head>
  <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>TK Dharma Wanita | Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <style>
    body {
      background-image: url('bg.jpg');
      background-size: cover;
    }

    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <div class="shadow bg-body rounded">
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
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="eksplore.php">Eksplore</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
              </li>
            </ul>
            <span class="navbar-item navbar-nav mb-2 mb-lg-0">
              <a class="nav-link active" href="login.php">Login</a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- <div class="container"> -->
  <!-- </div> -->

  <div class="container">
    <?php
    if (isset($_GET['pesan'])) {
      if ($_GET['pesan'] == "gagal") { ?>
        <div class="alert alert-danger">
          <strong>Perhatian!</strong> Username atau password anda salah
        </div>
    <?php
      }
    }
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black mt-5">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0"><img src="logo tk remove.png" width="100" style="float:left ;">
              <h3>TK DHARMA WANITA</h3>
            </span>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" method="POST" action="cek login.php">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>

              <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control form-control-lg" />

                <label class="form-label" for="username" name="username" id="username">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" />

                <label class="form-label" for="password" name="password" id="password">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit" style="background-color: rgb(19, 110, 155); color:white">Login</button>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p> -->

            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="fix.png" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </div>
</body>

</html>