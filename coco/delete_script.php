<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `tbl_product` WHERE id='$id'";
  $result = $con->query($sql);

  if ($result) {
    echo "
    <script type='text/javascript'>
      alert('deleted');
      location='admin_con.php';
    </script>
    ";
  }else {
    echo "
    <script type='text/javascript'>
      alert('error');
      location='admin_con.php';
    </script>
    ";
  }
?>
