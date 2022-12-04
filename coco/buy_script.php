<?php
  include "connect.php";

  $sql = "SELECT * FROM tbl_cart WHERE user_id='$_SESSION[sess_id]'";
  $result = $con->query($sql);

  $temp = array();
  while($row = $result->fetch_assoc()){
    array_push($temp,$row);
  }

  $json = json_encode($temp);

  $sql = "INSERT INTO tbl_bill(user_id,data,date) VALUES('$_SESSION[sess_id]','$json',now())";
  $result = $con->query($sql);

  if($result)
  {
    $sql = "DELETE FROM tbl_cart WHERE user_id='$_SESSION[sess_id]'";
    $result = $con->query($sql);
    echo "
    <script type='text/javascript'>
      location = 'buy.php';
    </script>
    ";
  }
?>
