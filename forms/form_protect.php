<?php
  session_start();
  if (!isset($_SESSION['id_auth'])) {
    header("Location: ../public/login.php");
    exit();
  }
?>