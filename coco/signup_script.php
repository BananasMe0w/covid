<?php
  include "connect.php";

  $name = $_POST['name_signup'];
  $address = $_POST['address_signup'];
  $tel = $_POST['tel_signup'];
  $email = $_POST['email_signup'];
  $password = $_POST['password_signup'];
  $repassword = $_POST['repassword_signup'];

  if ($name==''|| $address==''|| $tel==''|| $email==''|| $password==''|| $repassword=='') {
    echo "cannot invalid";
  }else if($password <> $repassword){
    echo "
    <script type='text/javascript'>
      alert('password not same');
      location='signup.php';
    </script>
    ";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows>0) {
      echo "
      <script type='text/javascript'>
        alert('email has already sign up');
        location='signup.php';
      </script>
      ";
    }else {
      $sql = "INSERT INTO `tbl_user`(`name`, `address`, `tel`, `email`, `password`, `status`) VALUES ('$name','$address','$tel','$email','$password','1')";
      $result = $con->query($sql);

      if ($result->num_rows>0) {
        echo "
        <script type='text/javascript'>
          alert('error');
          location='signup.php';
        </script>
        ";
      }else {
        echo "
        <script type='text/javascript'>
          alert('success');
          location='signin.php';
        </script>
        ";
      }
    }
  }
?>
