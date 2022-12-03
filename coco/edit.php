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
    $sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]'";
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
              <form action="edit_script.php?id=<?php echo $row['id']; ?>" method="post">
                <div class="col-12 mt-4">
                  <label>Name:</label>
                  <input class="form-control" placeholder="name" type="text" name="name_edit" value="<?php echo $row['name']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <label>image:</label>
                  <input class="form-control" placeholder="image" type="text" name="image_edit" value="<?php echo $row['image']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Type:</label>
                  <input class="form-control" placeholder="type" type="text" name="type_edit" value="<?php echo $row['type']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Price:</label>
                  <input class="form-control" placeholder="price" type="text" name="price_edit" value="<?php echo $row['price']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Amount:</label>
                  <input class="form-control" placeholder="amount" type="text" name="amount_edit" value="<?php echo $row['amount']; ?>" required>
                </div>
                <div class="col-12 mt-4">
                  <button class="btn btn-primary" type="submit">edit</button>
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
