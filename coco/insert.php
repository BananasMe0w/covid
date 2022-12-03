<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>CoCoCare</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

    <?php
    $sql = "SELECT * FROM tbl_product";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="card">
            <div class="card-header">
              <h3>Edit</h3>
            </div>
            <div class="card-body">
              <form action="insert_script.php" method="post">
                <div class="col-12 mt-4">
                  <label>Name:</label>
                  <input class="form-control" placeholder="Ex ample" type="text" name="name_insert"required>
                </div>
                <div class="col-12 mt-4">
                  <label>image:</label>
                  <input class="form-control" placeholder="img/mask/001.jpg" type="text" name="image_insert" value="<?php echo $row['image']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Type:</label>
                  <input class="form-control" placeholder="Mask" type="text" name="type_insert"required>
                </div>
                <div class="col-12 mt-4">
                  <label>Price:</label>
                  <input class="form-control" placeholder="price" type="text" name="price_insert" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Amount:</label>
                  <input class="form-control" placeholder="amount" type="text" name="amount_insert" vrequired>
                </div>
                <div class="col-12 mt-4">
                  <button class="btn btn-info" type="submit">insert</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
