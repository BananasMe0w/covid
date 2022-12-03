<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>CoCoCare</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

    <div class="container">
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>Image</th>
          <th>Amount</th>
          <th>Price</th>
        </thead>
        <?php
          include "connect.php";
          $sql = "SELECT * FROM tbl_cart WHERE user_id='$_SESSION[sess_id]'";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
          $sql2 = "SELECT * FROM tbl_product WHERE id='$row[prod_id]'";
          $result2 = $con->query($sql2);
          while ($row2 = $result2->fetch_assoc()) {

          $total = $total + $row['quantity'] * $row2['price']
        ?>
        <tbody>
          <tr>
            <td><?php echo $row2['name']; ?></td>
            <td><img class="d-block w-50" src="<?php echo $row2['image']; ?>"></td>
            <td><?php echo number_format($row['quantity']); ?></td>
            <td><?php echo number_format($row2['price']); ?></td>
          </tr>
        </tbody>
      <?php }} ?>
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
      <div align="right" class="row">
        <div class="col-12">
          <a href="buy.php"><button class="btn btn-success" type="button">Buy</button></a>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
