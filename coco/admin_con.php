<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>CoCoCare</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>
    <div class="container mt-5">
      <div class="row">
        <?php
          include "connect.php";
          $sql = "SELECT * FROM tbl_product";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
         ?>
        <div class="col-3">
          <div class="card">
            <div class="card-header">
              <h4><?php echo $row['type']; ?></h4>
              <img class="d-block w-100" src="<?php echo $row['image']; ?>">
              <p>Name : <?php echo $row['name']; ?></p>
              <p>Price : <?php echo $row['price']; ?></p>
              <p>Amount : <?php echo $row['amount']; ?></p>
              <hr>
              <a class="" href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary" type="button">Edit</button></a>
              <a class="" href="delete_script.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" type="button">Delete</button></a>

            </div>
          </div>
        </div>
      <?php } ?>
        <div align="right" class="col-12 mt-5">
          <a class="" href="insert.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info" type="button">Insert</button></a>
        </div>
      </div>
    </div>


    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
