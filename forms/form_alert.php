<?php
  include '../public/root.php';

  if (isset($_SESSION['error_message'])) {
    echo "
      <script type='text/javascript'>
        Swal.fire({
          icon: 'warning',
          title: '" . $_SESSION['error_message'] . "',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
        });
      </script>
    ";
    unset($_SESSION['error_message']);
  }

  if (isset($_SESSION['success_message'])) {
    echo "
      <script type='text/javascript'>
        Swal.fire({
          icon: 'success',
          title: '" . $_SESSION['success_message'] . "',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
        });
      </script>
    ";
    unset($_SESSION['success_message']);
  }
?>