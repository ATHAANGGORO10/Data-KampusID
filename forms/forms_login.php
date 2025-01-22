<?php
  include '../includes/server.php';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query_email = "SELECT * FROM tbl_auth_mahasiswa WHERE email = '$email'";
    $result = mysqli_query($connection, $query_email);

    if (mysqli_num_rows($result) > 0) {
        $auth_mahasiswa = mysqli_fetch_assoc($result);
        if (password_verify($password, $auth_mahasiswa['password'])) {
            session_start();
            $_SESSION['id_auth'] = $auth_mahasiswa['id_auth'];
            $_SESSION['name'] = $auth_mahasiswa['name'];
            $_SESSION['success_message'] = "Akun berhasil terdaftar!";
            header("Location: ../public/index.php");
            exit();
        } else {
          session_start();
          $_SESSION['error_message'] = "Password anda salah!";
          header("Location: ../public/login.php");
          exit();
        }
    } else {
      session_start();
      $_SESSION['error_message'] = "Gmail tidak ditemukan!";
      header("Location: ../public/login.php");
      exit();
    }
}
?>
