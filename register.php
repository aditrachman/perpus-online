<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);



    // menyiapkan query
    $sql = "INSERT INTO users (username, email, password) 
            VALUES (:username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $email,
        ":password" => $password
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>PERLINE</title>
    <!-- Favicon-->
    <link rel="icon" href="img/core-img/Avatar.svg">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Register Area-->

    <div class="register-area d-flex">
      <div class="register-content-wrapper d-flex align-items-center">
        <div class="register-content">
          <!-- Logo--><a class="logo" href="index.php">PERLINE</a>
          <h5>Dah punya akun belom ? bikin sini </h5>
          <p>Kalo dah punya langsung aja ke halaman <a href="login.php">Log in</a></p>
          <!-- Form-->
          <div class="register-form">
            <form action="" method="post">
              <div class="form-group"><i class="lni-user"></i>
                <input class="form-control" for="username" name="username" type="text" placeholder="Username">
              </div>
              <div class="form-group"><i class="lni-envelope"></i>
                <input class="form-control" for="email" name="email" type="email" placeholder="Alamat email">
              </div>
              <div class="form-group"><i class="lni-lock"></i>
                <input class="form-control" for="password" name="password" type="password" placeholder="Password">
              </div>
              <div class="custom-control custom-checkbox mb-3 mr-sm-2">
                <input class="custom-control-input" id="rememberMe" type="checkbox">
                <label class="custom-control-label" for="rememberMe">Accept Terms &amp; Conditions</label>
              </div>
              <button name="register" class="btn apland-btn w-100" type="daftar">Register Now</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Register Side Content-->
      <div class="register-side-content bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>

    </div>
    <!-- jQuery(necessary for all JavaScript plugins)-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>