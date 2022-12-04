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
      <div class="card mt-3">
          <div class="card-header text-white bg-primary">
            <h4>Bill</h4>
          </div>
          <div class="card-body">

            <table class="table table-respondsive">

                <thead>
                  <th>เลขทีคำสั่งซื้อ</th>
                  <th>วันเวลา</th>
                  <th>Action :</th>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM tbl_bill WHERE user_id = '$_SESSION[sess_id]'";
                  $result = $con->query($sql);
                  while($row = $result->fetch_assoc()){
                  ?>
                  <tr>
                    <td>#<?php echo $row['bill_id']; ?></td>
                    <td><?php echo $row['date'];?></td>
                    <td> <a href="bill.php?id=<?php echo $row['bill_id'];?>"> <button type="button" class="btn btn-success"> ดู </button> </a> </td>
                  </tr>
                <?php }?>
                </tbody>
            </table>

          </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
