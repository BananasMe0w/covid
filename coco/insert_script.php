<?php
  include "connect.php";

  $name = $_POST['name_insert'];
  $image = $_POST['image_insert'];
  $type = $_POST['type_insert'];
  $price = $_POST['price_insert'];
  $amount = $_POST['amount_insert'];

  $sql = "INSERT INTO `tbl_product`(`name`, `image`, `type`, `price`, `amount`) VALUES ('$name','$image','$type','$price','$amount')";
  $result = $con->query($sql);

  if ($result) {
    echo "
    <script type='text/javascript'>
      alert('inserted');
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
