<div class="container">
  <div class="row">
    <?php
      include "connect.php";
      $sql = "SELECT * FROM tbl_product";
      $result = $con->query($sql);

      while ($row = $result->fetch_assoc()) {
     ?>
    <div class="col-3">
      <div class="card" style="height: 32rem;">
        <div class="card-header">
          <h4><?php echo $row['type']; ?></h4>
          <img class="d-block w-100" src="<?php echo $row['image']; ?>">
          <p>Name : <?php echo $row['name']; ?></p>
          <p>Price : <?php echo $row['price']; ?></p>
          <p>Amount : <?php echo $row['amount']; ?></p>
          <hr>
          <?php
            if ($_SESSION['sess_status']==1) {
          ?>
          <a class="" href="order_script.php?order_id=<?php echo $row['id']; ?>"><button class="btn btn-success" type="button">cart</button></a>
        <?php }else{ ?>
          <button class="btn btn-success" type="button" disabled>cart</button>
          <sub class="text-danger">sign in first</sub>
        <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>
