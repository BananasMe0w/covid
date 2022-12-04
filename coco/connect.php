<?php
  $host = "localhost";
  $user = "root";
  $d_password = "12345678";
  $database = "coco";

  $con = new mysqli($host, $user, $d_password, $database);
  session_start();
?>
