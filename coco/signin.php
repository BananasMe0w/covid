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
        <div class="col-1"></div>
        <div class="col-10">
          <div class="card">
            <div class="card-header">
              <h3>Sign in</h3>
            </div>
            <div class="card-body">
              <form action="signin_script.php" method="post">
                <div class="col-12 mt-4">
                  <label>Email:</label>
                  <input class="form-control" placeholder="email" type="email" name="email_signup" required>
                </div>
                <div class="col-12 mt-4">
                  <label>Password:</label>
                  <input class="form-control" placeholder="password" type="password" name="password_signup" required>
                </div>
                <div class="col-12 mt-4">
                  <button class="btn btn-success" type="submit">submit</button>
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
