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


                            <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Profile <i class="fas fa-user-cog"></i> </h3>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="card mb-3">
                            <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="img/<?php echo $_SESSION['user']['photo'] ?>" width="160" height="160">
                                <!-- <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">ganti foto</button></div> -->
                            </div>
                        </div>
                        
                    </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <p class="text-primary m-0 font-weight-bold">Profile kamu </p>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="form-group"><label for="username"><strong>Nama</strong></label><input class="form-control" type="text" placeholder="<?php echo  $_SESSION["user"]["username"] ?>" name="username"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Alamat email</strong></label><input class="form-control" type="email" placeholder="<?php echo  $_SESSION["user"]["email"] ?>" name="email"></div>
                                                </div>
                                            </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Simpan perubahan</button></div> -->
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



                            <!-- BAGIAN FOOTER -->                               
            <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->



</body>
</html>