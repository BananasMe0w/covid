<?php
  include "connect.php";

  $product_id = $_GET['order_id'];
  $user_id = $_SESSION['sess_id'];

  $sql2 = "SELECT * FROM tbl_cart WHERE prod_id='$product_id' AND user_id='$user_id'";
  $result2 = $con->query($sql2);

  if ($result2->num_rows>0) {
    $row = $result2->fetch_assoc();
    $newqty = $row['quantity']+1;

    $sql2 = "UPDATE `tbl_cart` SET `quantity`='$newqty' WHERE prod_id='$product_id' AND user_id='$user_id'";
    $result2 = $con->query($sql2);

    echo "
    <script type='text/javascript'>
      alert('added');
      location='index.php'
    </script>
    ";
  } else {
    $sql = "INSERT INTO `tbl_cart`(`user_id`, `prod_id`, `quantity`, `time`) VALUES ('$user_id','$product_id', '1', now())";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('added');
      location='index.php'
    </script>
    ";
  }
?>
