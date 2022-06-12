<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
  $data = mysqli_fetch_assoc($login);
  if ($data['level'] == "admin") {
    $_SESSION['login'] = true;
    // $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    header('location:home admin.php');
    exit();
  } else if ($data['level'] == "guru") {
    $_SESSION['login'] = true;
    // $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "guru";
    header('location:home guru.php');
    exit();
  } else {
    echo "<script> alert('Username atau Password salah'); document.location.href='login.php';</script>";
  }
} else {
  // echo "<script> alert('Username atau Password salah'); document.location.href='login.php';</script>";
  header("location:login.php?pesan=gagal");
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
}
