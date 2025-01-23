<?php
  include '../includes/server.php';

  if (isset($_POST['create'])) {
    $nisn_mahasiswa       = mysqli_escape_string($connection,  $_POST['nisn_mahasiswa']);
    $nama_lengkap         = mysqli_escape_string($connection,  $_POST['nama_lengkap']);
    $jenis_kelamin        = mysqli_escape_string($connection,  $_POST['jenis_kelamin']);
    $tempat_lahir         = mysqli_escape_string($connection,  $_POST['tempat_lahir']);
    $tanggal_lahir        = mysqli_escape_string($connection,  $_POST['tanggal_lahir']);
    $agama_mahasiswa      = mysqli_escape_string($connection,  $_POST['agama_mahasiswa']);
    $nomer_telpon         = mysqli_escape_string($connection,  $_POST['nomer_telpon']);
    $alamat_mahasiswa     = mysqli_escape_string($connection,  $_POST['alamat_mahasiswa']);
    $asal_sekolah         = mysqli_escape_string($connection,  $_POST['asal_sekolah']);
    $jurusan_sekolah      = mysqli_escape_string($connection,  $_POST['jurusan_sekolah']);
    $jenjang_sekolah      = mysqli_escape_string($connection,  $_POST['jenjang_sekolah']);
    $universitas          = mysqli_escape_string($connection,  $_POST['universitas']);
    $program_studi        = mysqli_escape_string($connection,  $_POST['program_studi']);
    $nik_mahasiswa        = mysqli_escape_string($connection,  $_POST['nik_mahasiswa']);
    $nama_ayah            = mysqli_escape_string($connection,  $_POST['nama_ayah']);
    $nama_ibu             = mysqli_escape_string($connection,  $_POST['nama_ibu']);
    $pekerjaan_wali       = mysqli_escape_string($connection,  $_POST['pekerjaan_wali']);
    $pekerjaan_ibu        = mysqli_escape_string($connection,  $_POST['pekerjaan_ibu']);

    $query = "INSERT INTO 
                tbl_data_mahasiswa (
                  nisn_mahasiswa,
                  nama_lengkap,
                  jenis_kelamin,  
                  tempat_lahir,
                  tanggal_lahir,
                  agama_mahasiswa,
                  nomer_telpon,
                  alamat_mahasiswa,
                  asal_sekolah,
                  jurusan_sekolah,
                  jenjang_sekolah,
                  universitas,
                  program_studi,
                  nik_mahasiswa,
                  nama_ayah,
                  nama_ibu,
                  pekerjaan_wali,
                  pekerjaan_ibu,
                  created_at,
                  updated_at
                ) 
              VALUES (
                '$nisn_mahasiswa',
                '$nama_lengkap',
                '$jenis_kelamin',
                '$tempat_lahir',
                '$tanggal_lahir',
                '$agama_mahasiswa',
                '$nomer_telpon',
                '$alamat_mahasiswa',
                '$asal_sekolah',
                '$jurusan_sekolah',
                '$jenjang_sekolah',
                '$universitas',
                '$program_studi',
                '$nik_mahasiswa',
                '$nama_ayah',
                '$nama_ibu',
                '$pekerjaan_wali',
                '$pekerjaan_ibu',
                NOW(),
                NOW()
              )";
    if (mysqli_query($connection, $query)) {
      session_start();
      $_SESSION['success_message'] = "Data berhasil ditambahkan!";
      header("Location: ../index.php");
      exit();
    } else {
      session_start();
      $_SESSION['error_massage'] = "Data gagal ditambahkan!";
      header("Location: ../index.php");
      exit();
    }
  }
?>