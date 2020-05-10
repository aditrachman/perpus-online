<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html>
<head>
</head>


                            <!-- BAGIAN SIDEBAR -->
        <?php
          include('template/sidebar.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->


                                <!-- CONTENT -->
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                </div>
            </div>
            <div class="card text-dark">
                <div class="card-body">
                    <h4 class="card-title">Selamat datang ! <b><?php echo  $_SESSION["user"]["username"] ?></b>
                    <i class="far fa-hand-peace"></i>
                  </h4>
                    <p class="card-text">Dan selamat datang di website PERLINE <br>
                  Kamu bisa mendata ke anggotaan kamu disini</p><a class="card-link" href="timelinedaftar.php">Daftar</a><a class="card-link" 
                  href="timelinelihat.php">Lihat</a></div>
            </div>
                                <!-- CONTENT -->


                            <!-- BAGIAN FOOTER -->                               
            <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->


</body>
</html>