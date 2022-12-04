<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h2>CoCoCare</h2></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="order.php">Cart</a>
      </li>
      <hr>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">SawasD <?php echo $_SESSION['sess_name']; ?></a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="buy.php">ดูเลขคำสั่งซื้อ</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
