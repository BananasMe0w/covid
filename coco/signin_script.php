<?php
  include "connect.php";

  $email = $_POST['email_signup'];
  $password = $_POST['password_signup'];

  if ($email==''|| $password=='') {
    echo "cannot invalid";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows<1) {
      echo "
      <script type='text/javascript'>
        alert('email not found');
        location='signin.php';
      </script>
      ";
    }else {
      $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
      $result = $con->query($sql);

      if ($result->num_rows<1) {
        echo "
        <script type='text/javascript'>
          alert('password wrong');
          location='signin.php';
        </script>
        ";
      }else {
        $row = $result->fetch_assoc();
        $_SESSION['sess_id'] = $row['id'];
        $_SESSION['sess_name'] = $row['name'];
        $_SESSION['sess_status'] = $row['status'];

        echo "
        <script type='text/javascript'>
          alert('success');
          location='index.php';
        </script>
        ";
      }
    }
  }
?>
