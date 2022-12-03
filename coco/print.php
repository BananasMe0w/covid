<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>CoCoCare</title>
  </head>
  <body onload="window.print()">
    <?php include "checknav.php"; ?>
    <?php
    $sql = "SELECT * FROM tbl_cart";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    $sql2 = "SELECT * FROM tbl_user";
    $result2 = $con->query($sql2);
    $row2 = $result2->fetch_assoc();
    ?>

    <div class="container mt-4 mb-3">
      <div class="row">
        <div class="col-12">
          <h6>When: <?php echo $row['time']; ?></h6>
        </div>
        <div class="col-12">
          <h6>ID: <?php echo $row['cart_id']; ?></h6>
        </div>
        <div class="col-12">
          <h6>Name: <?php echo $row2['name']; ?></h6>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>Amount</th>
          <th>Price</th>
        </thead>
        <?php
          include "connect.php";
          $sql = "SELECT * FROM tbl_cart";
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
            <td><?php echo number_format($row['quantity']); ?></td>
            <td><?php echo number_format($row2['price']); ?></td>
          </tr>
        </tbody>
      <?php }} ?>
        <tr>
          <td></td>
          <td></td>
          <td>Total :
            <?php
              echo number_format($total);
            ?>
          </td>
        </tr>
      </table>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
