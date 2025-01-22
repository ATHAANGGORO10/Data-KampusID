<?php
  include '../includes/server.php';
  session_start();
  $_SESSION['success_message'] = "keluar akun berhasil!";
  header("Location: ../public/login.php");
  exit();
?>