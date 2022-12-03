<?php
  include "connect.php";

  unset($_SESSION['id']);
  unset($_SESSION['name']);
  unset($_SESSION['status']);
  session_destroy();

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
