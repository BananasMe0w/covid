<?php
  include "connect.php";

  $id = $_GET['id'];
  $name = $_POST['name_edit'];
  $image = $_POST['image_edit'];
  $type = $_POST['type_edit'];
  $price = $_POST['price_edit'];
  $amount = $_POST['amount_edit'];

  $sql = "UPDATE `tbl_product` SET `name`='$name',`image`='$image',`type`='$type',`price`='$price',`amount`='$amount' WHERE id='$id'";
  $result = $con->query($sql);

  if ($result) {
    echo "
    <script type='text/javascript'>
      alert('edited');
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
