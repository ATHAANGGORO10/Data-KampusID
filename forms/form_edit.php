<?php
  include '../includes/server.php';

  if (isset($_POST['edit'])) {
    $nisn_mahasiswa       = $_POST['nisn_mahasiswa'];
    $nama_lengkap         = $_POST['nama_lengkap'];
    $jenis_kelamin        = $_POST['jenis_kelamin'];
    $tempat_lahir         = $_POST['tempat_lahir'];
    $tanggal_lahir        = $_POST['tanggal_lahir'];
    $agama_mahasiswa      = $_POST['agama_mahasiswa'];
    $nomer_telpon         = $_POST['nomer_telpon'];
    $alamat_mahasiswa     = $_POST['alamat_mahasiswa'];
    $asal_sekolah         = $_POST['asal_sekolah'];
    $jurusan_sekolah      = $_POST['jurusan_sekolah'];
    $jenjang_sekolah      = $_POST['jenjang_sekolah'];
    $universitas          = $_POST['universitas'];
    $program_studi        = $_POST['program_studi'];
    $nik_mahasiswa        = $_POST['nik_mahasiswa'];
    $photo_mahasiswa      = $_POST['photo_mahasiswa'];
    $email_mahasiswa      = $_POST['email_mahasiswa'];
    $nama_ayah            = $_POST['nama_ayah'];
    $nama_ibu             = $_POST['nama_ibu'];
    $pekerjaan_wali       = $_POST['pekerjaan_wali'];
    $pekerjaan_ibu        = $_POST['pekerjaan_ibu'];
    $nomer_telpon_rumah   = $_POST['nomer_telpon_rumah'];
  
    $query = "UPDATE tbl_mahasiswa 
              SET
                nisn_mahasiswa      = '$nisn_mahasiswa',
                nama_lengkap        = '$nama_lengkap',
                jenis_kelamin       = '$jenis_kelamin',
                tempat_lahir        = '$tempat_lahir',
                tanggal_lahir       ='$tanggal_lahir',
                agama_mahasiswa     = '$agama_mahasiswa',
                nomer_telpon        = '$nomer_telpon',
                alamat_mahasiswa    = '$alamat_mahasiswa',
                asal_sekolah        = '$asal_sekolah',
                jurusan_sekolah     = '$jurusan_sekolah',
                jenjang_sekolah     = '$jenjang_sekolah',
                universitas         = '$universitas',
                program_studi       = '$program_studi',
                nik_mahasiswa       = '$nik_mahasiswa',
                photo_mahasiswa     = '$photo_mahasiswa',
                email_mahasiswa     = '$email_mahasiswa',
                nama_ayah           = '$nama_ayah',
                nama_ibu            = '$nama_ibu',
                pekerjaan_wali      = '$pekerjaan_wali',
                pekerjaan_ibu       = '$pekerjaan_ibu',
                nomer_telpon_rumah  = '$nomer_telpon_rumah',
                updated_at          = NOW(),
              WHERE id = $id";

    if (mysqli_query($connection, $query)) {
      session_start();
      $_SESSION['success_message'] = "Data berhasil diperbarui!";
      header("Location: ../index.php");
      exit();
    } else {
      session_start();
      $_SESSION['error_massage'] = "Data gagal diperbarui!";
      header("Location: ../index.php");
      exit();
    }
  }
?>