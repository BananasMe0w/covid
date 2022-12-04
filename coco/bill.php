<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>CoCoCare</title>
  </head>
  <body>
    <?php
    include "checknav.php";
    $id = $_GET["id"];
    include "connect.php";

    $sql = "SELECT * FROM tbl_bill WHERE bill_id='$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $json =  json_decode($row['data'],true);
    ?>

    <div class="container mt-3">
      <h3 style="margin-bottom:-0.5rem"> เลขที่คำสั่งซื้อ : #<?php echo $id; ?></h3>
      <sub > สั่งซื้อเมื่อ : <?php echo $row['date']; ?> </sub>
      <hr>
      <h5>รายการสั่งซื้อ</h5>
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>Image</th>
          <th>Amount</th>
          <th>Price</th>
        </thead>
        <?php


          for($i = 0 ; $i < sizeof($json) ; $i++)
          {

          $prod_id = $json[$i]['prod_id'];
          $sql = "SELECT * FROM tbl_product WHERE id='$prod_id'";
          $result = $con->query($sql);
          $row = $result->fetch_assoc();

          $total = $total + $json[$i]['quantity'] * $row['price'];
        ?>
        <tbody>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><img class="d-block w-50" src="<?php echo $row['image']; ?>"></td>
            <td><?php echo number_format($json[$i]['quantity']); ?></td>
            <td><?php echo number_format($row['price']); ?></td>
          </tr>
        </tbody>
      <?php }  ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>Total :
            <?php
              echo number_format($total);
            ?>
          </td>
        </tr>
      </table>
      <hr>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
