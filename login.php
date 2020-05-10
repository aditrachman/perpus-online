<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.designing-world.com/apland-4.3.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 08:49:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Title-->
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
          <!-- Logo--><a class="logo" href="index.php">PARLINE</a>
          <h5>Wadaw balik lagi nih ato baru bikin akun ?</h5>
          <p>Kalo belum punya akun mah daftar dulu di <a href="register.php">register</a></p>
          <!-- Form-->
          <div class="register-form">
            <form action="" method="post">
              <div class="form-group"><i class="lni-user"></i>
                <input class="form-control" name="username" type="text" placeholder="Username">
              </div>
              <div class="form-group"><i class="lni-lock"></i>
                <input class="form-control"  name="password" type="password" placeholder="Password">
              </div>
              <div class="custom-control custom-checkbox mb-3 mr-sm-2">
                <input class="custom-control-input" id="rememberMe" type="checkbox">
                <label class="custom-control-label" for="rememberMe">Keep me logged in</label>
              </div>
              <button class="btn apland-btn w-100" name="login" type="daftar">Log In</button><a class="forgot-password" href="forget-password.html">Forgot Password?</a>
            </form>
          </div>
          <!-- Sign in via others-->
        </div>
      </div>
      <!-- Register Side Content-->
      <div class="register-side-content bg-img" style="background-image: url(img/bg-img/1.jpg);"></div>
    </div>
    <!-- jQuery(necessary for all JavaScript plugins)-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

<!-- Mirrored from demo.designing-world.com/apland-4.3.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 08:49:12 GMT -->
</html>