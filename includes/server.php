<?php
  $username = "root";
  $password = "";
  $server = "localhost";
  $database = "db_mahasiswa";
  $connection = mysqli_connect($server, $username, $password, $database);

  if (!$connection) {
    die ("Database connection failed" . mysqli_connect_error());
  }
?>