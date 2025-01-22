<?php
  include '../includes/server.php';

  if (isset($_POST['register'])) {
    $name = mysqli_escape_string($connection,  $_POST['name']);
    $email = mysqli_escape_string($connection,  $_POST['email']);
    $password = mysqli_escape_string($connection,  $_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_email = "SELECT * FROM tbl_auth_mahasiswa WHERE email = '$email'";
    $query_email = mysqli_query($connection, $query_email);
    if (mysqli_num_rows($query_email) > 0) {
      session_start();
      $_SESSION['error_message'] = "Gmail sudah terdaftar!";
      header("Location: ../public/register.php");
      exit();
    }

    $query = "INSERT INTO tbl_auth_mahasiswa (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($connection, $query)) {
      session_start();
      $_SESSION['success_message'] = "Daftar akun berhasil!";
      header("Location: ../public/login.php");
      exit();
    }
  }
?>